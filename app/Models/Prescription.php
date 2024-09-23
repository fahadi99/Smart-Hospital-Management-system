<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Department;
use App\Models\Prescription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prescription extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'prescriptions';

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'date',
        'status',
    ];

    public static function getById($id)
    {
        return self::where('id', $id)->first();
    }

    public function generatePrescription($id)
    {
        $prescription_data = Prescription::find($id);

        if ($prescription_data) {

            $patient_id = $prescription_data->patient_id;
            $doctor_id = $prescription_data->doctor_id;

            if ($patient_id && $doctor_id) {

                $patient_data = Patient::find($patient_id);
                $doctor_data = Doctor::find($doctor_id);
                $department_data = Department::find($doctor_data->department_id);

                $template = public_path() . "/documents/prescription_slip.pdf";

                $output_prescription = public_path('/documents/output_prescription.pdf');
                $exsisting_prescription = public_path() . "/documents/prescription_slip.pdf";

                $pdf = new \setasign\Fpdi\Fpdi();

                $pageCount = $pdf->setSourceFile($exsisting_prescription);
                $pageNo = 1;

                // for ($pageNo = 0; $pageNo <= $pageCount; $pageNo++) {

                $templateId = $pdf->importPage($pageNo);
                $size = $pdf->getTemplateSize($templateId);
                $pdf->AddPage($size['orientation'], [$size['width'], $size['height']]);
                $pdf->useTemplate($templateId);
                $pdf->SetFont('Helvetica', 'B', 10);

                //Setting up department name and doctor name
                $pdf->SetXY(51.5, 68);
                $pdf->Cell(0, 10, $department_data->name . '/' . $doctor_data->doctor_name);

                $pdf->SetXY(32, 77);
                $pdf->Cell(0, 10, $patient_data->name_of_patient);

                $pdf->SetXY(93.5, 77);
                $pdf->Cell(0, 10, $patient_data->age);

                $pdf->SetXY(133, 77);
                $pdf->Cell(0, 10, ucfirst($patient_data->gender));

                $pdf->SetXY(93.5, 85);
                $pdf->Cell(0, 10, getBasicDateFormat($prescription_data->date,'d-m-Y'));

                $pdf->SetXY(32, 85);
                $pdf->Cell(0, 10, $patient_data->cnic_number);

                $patient_category = str_replace("_", " ", $patient_data->patient_category);

                $pdf->SetXY(32, 93.5);
                $pdf->Cell(0, 10, ucfirst($patient_category));

                $pdf->SetXY(31.5, 102);
                $pdf->Cell(0, 10, $patient_data->patient_mr_number);

                // }

                $pdf->Output($output_prescription, 'F'); // Save to file

                return response()->file($output_prescription, [
                    'Content-Type' => 'application/pdf',
                ]);

            }
        }
    }

    public static function getAll()
    {
        $request = request();

        $search['q'] = $request->has('q') ? $request->get('q') : false;
        $search['status'] = $request->has('status') ? $request->get('status') : false;

        $data = self::leftJoin('patients as p', 'p.id', '=', 'prescriptions.patient_id')
            ->leftJoin('doctors as d', 'd.id', '=', 'prescriptions.doctor_id')
            ->select([
                'prescriptions.*',
                'p.name_of_patient as patient_name',
                'd.doctor_name as doctor_name'
            ]);

        if ($search['q']) {
            $data = $data->where('p.name_of_patient', 'iLIKE', "%{$search['q']}%");
        }

        if ($search['status'] !== false) {
            if ($search['status'] == 'paid') {
                $data = $data->where('prescriptions.status', 'paid');
            } elseif ($search['status'] == 'unpaid') {
                $data = $data->where('prescriptions.status', 'unpaid');
            }
        }

        $rtn['search'] = $search;
        $rtn['data'] = $data->orderby('prescriptions.created_at', 'desc')->paginate(10);

        return $rtn;
    }

    public function addForm($request = false)
    {
        if ($request === false) {
            $request = request();
        }

        $request->validate([
            'patient_id' => ['required'],
            'doctor_id' => ['required'],
        ]);

        $obj = new Prescription;
        $obj->patient_id = $request->patient_id;
        $obj->doctor_id = $request->doctor_id;
        $obj->date = Carbon::today();
        $obj->status = 'paid';
        $obj->created_by = auth()->user()->id;
        $obj->save();

        session()->flash('success', 'Prescription generated successfully');
        return Redirect::route('prescriptions.index');

    }

    public function updateForm($request = false)
    {

        if ($request === false) {
            $request = request();
        }

        $request->validate([
            'patient_id' => ['required'],
            'doctor_id' => ['required'],
        ]);

        $obj = Prescription::find($request->id);
        $obj->patient_id = $request->patient_id;
        $obj->doctor_id = $request->doctor_id;
        $obj->date = Carbon::today();
        $obj->status = 'paid';
        $obj->updated_by = auth()->user()->id;
        $obj->update();

        session()->flash('success', 'Prescription updated successfully');
        return Redirect::route('prescriptions.index');
    }

    public function deleteObj()
    {
        $this->deleted_by = auth()->user()->id;
        $this->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Prescription has been deleted successfully',
        ]);
    }

}
