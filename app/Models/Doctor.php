<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\UserPreferences;
use Illuminate\Validation\Rule;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'doctors';

    protected $fillable = ['doctor_name', 'department_id', 'doctor_specialization', 'qualification', 'email', 'doctor_address', 'doctor_image', 'created_by'];

    public static function getById($id)
    {
        return self::where('id', $id)->first();
    }

    public static function getForSelect()
    {
        return self::leftjoin('departments as d', 'd.id', 'doctors.department_id')
            ->select([
                'd.name as department_name',
                'doctors.*',
            ])
            ->where('doctors.status', 1)->get();
    }

    public static function AvatarImage()
    {
        return 'src/media/doctors/';
    }

    public function UpdateImage($save = true)
    {
        $request = request();
        $dir = self::AvatarImage();
        $path = public_path() . '/' . $dir;
        $doctor_image = public_path() . '/' . $this->doctor_image;

        File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);

        if ($this->doctor_image != '' && File::exists($doctor_image)) {
            File::delete($doctor_image);
        }
        if ($request->image_remove == 1 && File::exists($doctor_image)) {
            File::delete($doctor_image);
            $this->doctor_image = '';
        } else {
            $extension = $request->file('doctor_image')->getClientOriginalExtension();
            $ImageName = strtolower($dir . Str::random(8) . '_' . time() . '_' . rand(1000, 9999) . '.' . $extension);
            $request->file('doctor_image')->move(self::AvatarImage(), $ImageName);
            $this->doctor_image = $ImageName;
        }

        if ($save) {
            $this->save();
        }
    }

    public static function getAll()
    {
        $request = request();

        $search['q'] = $request->has('q') ? $request->get('q') : false;
        $search['status'] = $request->has('status') ? $request->get('status') : false;
        $search['department'] = $request->has('department') ? $request->get('department') : false;

        $data = self::leftjoin('departments as d', 'd.id', 'doctors.department_id')->select(['d.name as department_name', 'doctors.*']);

        if ($search['q']) {
            $data = $data->where('doctors.doctor_name', 'iLIKE', "%{$search['q']}%");
        }

        if ($search['status'] !== false) {
            if ($search['status'] == 1) {
                $data = $data->where('doctors.status', 1);
            } elseif ($search['status'] == 0) {
                $data = $data->where('doctors.status', 0);
            }
        }

        if ($search['department']) {
            $data = $data->where('doctors.department_id', $search['department']);
        }

        $rtn['search'] = $search;
        $rtn['data'] = $data->orderby('doctors.created_at', 'desc')->paginate(10);

        return $rtn;
    }

    public function addForm($request = false)
    {
        if ($request === false) {
            $request = request();
        }

        $request->validate([
            'doctor_name' => ['required'],
            'department_id' => ['required'],
            'doctor_specialization' => ['required'],
            'qualification' => ['required'],
            'email' => ['required'],
            'doctor_address' => ['required'],
            'doctor_image' => ['required', 'mimes:jpeg,png,jpg,gif'],
        ]);

        $obj = new Doctor;
        $obj->doctor_name = $request->doctor_name;
        $obj->department_id = $request->department_id;
        $obj->doctor_specialization = $request->doctor_specialization;
        $obj->qualification = $request->qualification;
        $obj->email = $request->email;
        $obj->doctor_address = $request->doctor_address;
        $obj->status = 1;
        $obj->created_by = auth()->user()->id;

        if ($request->has('doctor_image')) {
            $obj->UpdateImage();
        }
        $obj->save();

        session()->flash('success', 'Doctor created successfully');
        return Redirect::route('doctors.index');
    }

    public function updateForm($request = false)
    {

        if ($request === false) {
            $request = request();
        }

        $request->validate([
            'doctor_name' => ['required'],
            'department_id' => ['required'],
            'doctor_specialization' => ['required'],
            'qualification' => ['required'],
            'email' => ['required'],
            'doctor_address' => ['required'],
            // 'doctor_image' => ['required','mimes:jpeg,png,jpg,gif'],
            'status' => ['required'],
        ]);

        $obj = Doctor::find($request->id);
        $obj->doctor_name = $request->doctor_name;
        $obj->department_id = $request->department_id;
        $obj->doctor_specialization = $request->doctor_specialization;
        $obj->qualification = $request->qualification;
        $obj->email = $request->email;
        $obj->doctor_address = $request->doctor_address;
        $obj->status = $request->status;
        $obj->updated_by = auth()->user()->id;

        if ($request->has('doctor_image')) {
            $obj->UpdateImage();
        }
        $obj->update();

        session()->flash('success', 'Doctor updated successfully');
        return Redirect::route('doctors.index');
    }

    public function deleteObj()
    {
        $this->deleted_by = auth()->user()->id;
        $this->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Doctor has been deleted successfully',
        ]);
    }
}
