<?php

namespace App\Http\Controllers\Department;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\UserPreferences;
use App\Http\Controllers\Controller;

class DepartmentsController extends Controller
{
    public function create(Request $request)
    {
        $preferences = UserPreferences::getPreferences();
        return view('modules.departments.create', compact('preferences'));
    }

    public function store(Request $request)
    {
        $obj = new Department();
        return $obj->addForm();
    }

    public function update(Request $request)
    {
        $obj = new Department();
        return $obj->updateForm();
    }

    public function index(Request $request)
    {
        $d = Department::getAll();

        $page = 'departments';
        $data = $d['data'];
        $search = $d['search'];

        if ($request->ajax()) {
            return response()->json([
                'status' => 200,
                'data' => view('modules.departments.include.list_partial', compact('data', 'page', 'search'))->render(),
            ]);
        }

        $preferences = UserPreferences::getPreferences();
        return view('modules.departments.index', compact('preferences', 'page', 'search', 'data'));
    }

    public function edit($id)
    {
        $obj = Department::find($id);
        $preferences = UserPreferences::getPreferences();
        return view('modules.departments.update', compact('preferences', 'obj'));
    }

    public function delete($id = false)
    {
        if ($id) {
            $obj = Department::find($id);
            return $obj->deleteObj();
        }
    }
}
