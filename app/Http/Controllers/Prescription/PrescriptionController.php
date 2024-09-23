<?php

namespace App\Http\Controllers\Prescription;

use FPDF;
use App\Models\Doctor;
use App\Models\Patient;
use setasign\Fpdi\Fpdi;
use App\Models\Department;
use App\Models\Prescription;
use Illuminate\Http\Request;
use App\Models\UserPreferences;
use App\Http\Controllers\Controller;

class PrescriptionController extends Controller
{
    public function index (Request $request) {

        $d = Prescription::getAll();
        $preferences = UserPreferences::getPreferences();

        $page = 'prescriptions';
        $data = $d['data'];
        $search = $d['search'];

        if ($request->ajax()) {
            return response()->json([
                'status' => 200,
                'data' => view('modules.prescriptions.include.list_partial', compact('data','page','search'))->render(),
            ]);
        }

        return view('modules.prescriptions.index',compact('preferences','page','search','data'));
    }

    public function create (Request $request) {

        $patients = Patient::getForSelect();
        $doctors = Doctor::getForSelect();

        $preferences = UserPreferences::getPreferences();

        return view('modules.prescriptions.create',compact('preferences','patients','doctors'));
    }

    public function edit ($id) {

        $obj = Prescription::find($id);

        $patients = Patient::getForSelect();
        $doctors = Doctor::getForSelect();

        $preferences = UserPreferences::getPreferences();

        return view('modules.prescriptions.update',compact('preferences','obj','patients','doctors'));

    }

    public function store (Request $request) {

        $obj = new Prescription();
        return $obj->addForm();
    }

    public function update (Request $request) {

        $obj = new Prescription();
        return $obj->updateForm();
    }

    public function download_prescription ($id) {
        if ($id) {
            $obj = new Prescription();
            return $obj->generatePrescription($id);
        }
    }

}
