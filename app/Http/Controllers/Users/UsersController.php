<?php

namespace App\Http\Controllers\Users;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserPreferences;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function create (Request $request) {

        $preferences = UserPreferences::getPreferences();
        $roles = Role::getActiveRoles();
        return view('modules.users.create',compact('preferences','roles'));
    }

    public function store (Request $request) {

        $obj = new User();
        return $obj->createForm();
    }

    public function update (Request $request) {

        $obj = new User();
        return $obj->updateForm();
    }

    public function index (Request $request) {

        $d = User::getAll();

        $page = 'users';
        $data = $d['data'];
        $search = $d['search'];

        if ($request->ajax()) {
            return response()->json([
                'status' => 200,
                'data' => view('modules.users.include.list_partial', compact('data','page','search'))->render(),
            ]);
        }

        $preferences = UserPreferences::getPreferences();
        return view('modules.users.index',compact('preferences','page','search','data'));
    }

    public function edit ($id) {

        $user = User::find($id);
        $roles = Role::where('status',1)->get();

        $preferences = UserPreferences::getPreferences();
        return view('modules.users.update',compact('preferences','user','roles'));

    }

    public function delete($id = false)
    {
        if ($id) {
             $obj = User::find($id);
             return $obj->deleteObj();
        }
    }
}
