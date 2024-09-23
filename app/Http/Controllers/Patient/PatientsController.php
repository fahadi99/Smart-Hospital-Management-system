<?php

namespace App\Http\Controllers\Patient;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\UserPreferences;
use App\Http\Controllers\Controller;

class PatientsController extends Controller
{
    public function create(Request $request)
    {
        $preferences = UserPreferences::getPreferences();
        return view('modules.patients.create', compact('preferences'));
    }

    public function store(Request $request)
    {
        $obj = new Patient();
        return $obj->addForm($request);
    }

    public function update(Request $request)
    {
        $obj = new Patient();
        return $obj->updateForm($request);
    }

    public function index(Request $request)
    {
        $d = Patient::getAll();

        $page = 'patients';
        $data = $d['data'];
        $search = $d['search'];

        if ($request->ajax()) {
            return response()->json([
                'status' => 200,
                'data' => view('modules.patients.include.list_partial', compact('data', 'page', 'search'))->render(),
            ]);
        }

        $preferences = UserPreferences::getPreferences();
        return view('modules.patients.index', compact('preferences', 'page', 'search', 'data'));
    }

    public function edit($id)
    {
        $obj = Patient::with('emergencyContact')->find($id);

        $preferences = UserPreferences::getPreferences();
        return view('modules.patients.update', compact('preferences', 'obj'));
    }

    public function delete($id = false)
    {
        if ($id) {
            $obj = Patient::find($id);
            return $obj->deleteObj();
        }
    }

    public function download_visiting_card ($id) {
        if ($id) {
            $obj = new Patient();
            return $obj->generateVistingCard($id);
        }
    }

}
