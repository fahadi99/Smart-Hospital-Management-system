<?php

namespace App\Http\Controllers\Setting;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\UserPreferences;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class RolesController extends Controller
{
    public function create(Request $request)
    {
        $preferences = UserPreferences::getPreferences();
        return view('modules.roles.create', compact('preferences'));
    }

    public function store(Request $request)
    {
        $obj = new Role();
        return $obj->addForm($request);
    }

    public function update(Request $request)
    {
        $obj = Role::find($request->id);
        return $obj->updateForm($request);
    }

    public function index(Request $request)
    {
        $d = Role::getAll();

        $page = 'roles';
        $data = $d['data'];
        $search = $d['search'];

        if ($request->ajax()) {
            return response()->json([
                'status' => 200,
                'data' => view('modules.roles.include.list_partial', compact('data', 'page', 'search'))->render(),
            ]);
        }

        $preferences = UserPreferences::getPreferences();

        return view('modules.roles.index', compact('preferences', 'page', 'search', 'data'));
    }

    public function edit($id)
    {
        $obj = Role::find($id);

        $preferences = UserPreferences::getPreferences();
        return view('modules.roles.update', compact('preferences', 'obj'));
    }

    public function delete($id = false)
    {
        if ($id) {
            $obj = Role::find($id);
            return $obj->deleteObj();
        }

        return response()->json([
            'status' => 400,
            'message' => 'Invalid ID provided.',
        ]);
    }
}
