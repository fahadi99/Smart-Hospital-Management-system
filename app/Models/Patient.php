<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\PatientEmergencyContact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'patients';

    protected $fillable = [
        'name_of_patient',
        'cnic_number',
        'date_of_birth',
        'gender',
        'patient_category',
        'permanent_address',
        'phone',
        'cell',
        'email',
        'age',
        'blood_group',
        'reffering_doctor_name',
        'contact_number',
        'address',
        'patient_mr_number'
    ];

    public function emergencyContact()
    {
        return $this->hasOne(PatientEmergencyContact::class);
    }
    public static function getById($id)
    {
        return self::where('id', $id)->first();
    }

    public static function getForSelect()
    {
        return self::where('status', 1)->get();
    }

    public static function getAll()
    {
        $request = request();

        $search['q'] = $request->has('q') ? $request->get('q') : false;
        $search['status'] = $request->has('status') ? $request->get('status') : false;

        $data = self::select(['patients.*']);

        if ($search['q']) {
            $data = $data->where('patients.name_of_patient', 'iLIKE', "%{$search['q']}%");
        }

        if ($search['status'] !== false) {
            if ($search['status'] == 1) {
                $data = $data->where('patients.status', 1);
            } elseif ($search['status'] == 0) {
                $data = $data->where('patients.status', 0);
            }
        }

        $rtn['search'] = $search;
        $rtn['data'] = $data->orderby('patients.created_at', 'desc')->paginate(10);

        return $rtn;
    }

    public function addForm($request = false)
    {
        if ($request === false) {
            $request = request();
        }

        $request->validate([
            'name_of_patient' => ['required'],
            'cnic_number' => ['required', 'digits:13'],
            'date_of_birth' => ['required'],
            'gender' => ['required'],
            'patient_category' => ['required'],
            'permanent_address' => ['required'],
            'phone' => ['required'],
            'cell' => ['required'],
            'email' => ['required'],
            'blood_group' => ['required'],
            'reffering_doctor_name' => ['required'],
            'contact_number' => ['required'],
            'address' => ['required'],
            'emergency_contact_name' => ['required'],
            'emergency_contact_relation' => ['required'],
            'emergency_contact_number' => ['required'],
        ]);

        $dob = Carbon::parse($request->input('date_of_birth'));
        $age = Carbon::now()->diff($dob)->y;

        $obj = new Patient;
        $obj->name_of_patient = $request->name_of_patient;
        $obj->cnic_number = $request->cnic_number;
        $obj->date_of_birth = Carbon::parse($request->date_of_birth);
        $obj->gender = $request->gender;
        $obj->patient_category = $request->patient_category;
        $obj->permanent_address = $request->permanent_address;
        $obj->phone = $request->phone;
        $obj->cell = $request->cell;
        $obj->email = $request->email;
        $obj->age = $age;
        $obj->blood_group = $request->blood_group;
        $obj->reffering_doctor_name = $request->reffering_doctor_name;
        $obj->contact_number = $request->contact_number;
        $obj->address = $request->address;
        $obj->created_by = auth()->user()->id;
        $obj->save();
        $obj->patient_mr_number = mrNumberGenerator($obj->id);
        $obj->update();

        $obj->emergencyContact()->create([
            'name' => $request->emergency_contact_name,
            'relation' => $request->emergency_contact_relation,
            'contact' => $request->emergency_contact_number,
            'created_by' => auth()->user()->id,
        ]);

        session()->flash('success', 'Patient created successfully');
        return Redirect::route('patients.index');
    }

    public function updateForm($request = false)
    {
        if ($request === false) {
            $request = request();
        }

        $request->validate([
            'name_of_patient' => ['required'],
            'cnic_number' => ['required'],
            'date_of_birth' => ['required'],
            'gender' => ['required'],
            'patient_category' => ['required'],
            'permanent_address' => ['required'],
            'phone' => ['required'],
            'cell' => ['required'],
            'email' => ['required'],
            'blood_group' => ['required'],
            'reffering_doctor_name' => ['required'],
            'contact_number' => ['required'],
            'address' => ['required'],
            'emergency_contact_name' => ['required'],
            'emergency_contact_relation' => ['required'],
            'emergency_contact_number' => ['required'],
        ]);

        $dob = Carbon::parse($request->input('date_of_birth'));
        $age = Carbon::now()->diff($dob)->y;

        $obj = Patient::find($request->id);
        $obj->name_of_patient = $request->name_of_patient;
        $obj->cnic_number = $request->cnic_number;
        $obj->date_of_birth = $request->date_of_birth;
        $obj->gender = $request->gender;
        $obj->patient_category = $request->patient_category;
        $obj->permanent_address = $request->permanent_address;
        $obj->phone = $request->phone;
        $obj->cell = $request->cell;
        $obj->email = $request->email;
        $obj->age = $age;
        $obj->blood_group = $request->blood_group;
        $obj->reffering_doctor_name = $request->reffering_doctor_name;
        $obj->contact_number = $request->contact_number;
        $obj->address = $request->address;
        $obj->updated_by = auth()->user()->id;
        $obj->update();

        $obj->emergencyContact()->updateOrCreate(
            ['patient_id' => $obj->id],
            [
                'name' => $request->emergency_contact_name,
                'relation' => $request->emergency_contact_relation,
                'contact' => $request->emergency_contact_number,
                'updated_by' => auth()->user()->id,
            ]
        );

        session()->flash('success', 'Patient updated successfully');
        return Redirect::route('patients.index');
    }

    public function deleteObj()
    {
        $this->deleted_by = auth()->user()->id;
        $this->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Patient has been deleted successfully',
        ]);
    }

    public function generateVistingCard($id)
    {

        $patient_data = Patient::find($id);

        if ($patient_data) {

            $template = public_path() . "/documents/visiting_card.pdf";

            $output_prescription = public_path('/documents/visiting_card.pdf');
            $exsisting_prescription = public_path() . "/documents/output_visiting_card.pdf";

            $pdf = new \setasign\Fpdi\Fpdi();

            $pageCount = $pdf->setSourceFile($exsisting_prescription);
            $pageNo = 1;

            // for ($pageNo = 0; $pageNo <= $pageCount; $pageNo++) {

            $templateId = $pdf->importPage($pageNo);
            $size = $pdf->getTemplateSize($templateId);
            $pdf->AddPage($size['orientation'], [$size['width'], $size['height']]);
            $pdf->useTemplate($templateId);
            $pdf->SetFont('Helvetica', 'B', 10);
            $patient_category = str_replace("_", " ", $patient_data->patient_category);

            //Setting up department name and doctor name

            $pdf->SetXY(115, 85);
            $pdf->Cell(0, 10, $patient_data->name_of_patient);

            // $pdf->SetXY(75,70);
            // $pdf->Cell(0, 10, $patient_data->age);

            // $pdf->SetXY(130,70);
            // $pdf->Cell(0, 10, ucfirst($patient_data->gender));

            $pdf->SetXY(115, 92);
            $pdf->Cell(0, 10, $patient_data->cnic_number);

            $pdf->SetXY(115, 101);
            $pdf->Cell(0, 10, getBasicDateFormat($patient_data->date_of_birth, 'd-m-Y'));

            $pdf->SetXY(175, 101);
            $pdf->Cell(0, 10, $patient_data->blood_group);

            $pdf->SetXY(115, 109);
            $pdf->Cell(0, 10, $patient_data->address);

            $pdf->SetXY(115, 118);
            $pdf->Cell(0, 10, ucfirst($patient_data->cell));

            $pdf->SetXY(115, 125);
            $pdf->Cell(0, 10, $patient_data->patient_mr_number);

            // }

            $pdf->Output($output_prescription, 'F'); // Save to file

            return response()->file($output_prescription, [
                'Content-Type' => 'application/pdf',
            ]);

        }

    }



}
