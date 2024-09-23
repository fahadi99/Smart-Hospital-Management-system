<?php

namespace App\Http\Controllers\Setting;

use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use App\Models\UserPreferences;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class ServiceCategoryController extends Controller
{
    public function create(Request $request)
    {
        $preferences = UserPreferences::getPreferences();
        return view('modules.service_categories.create', compact('preferences'));
    }

    public function store(Request $request)
    {
        $obj = new ServiceCategory();
        return $obj->addForm($request);
    }

    public function update(Request $request)
    {
        $obj = ServiceCategory::find($request->id);
        return $obj->updateForm($request);
    }

    public function index(Request $request)
    {
        $d = ServiceCategory::getAll();

        $page = 'service_categories';
        $data = $d['data'];
        $search = $d['search'];

        if ($request->ajax()) {
            return response()->json([
                'status' => 200,
                'data' => view('modules.service_categories.include.list_partial', compact('data', 'page', 'search'))->render(),
            ]);
        }

        $preferences = UserPreferences::getPreferences();

        return view('modules.service_categories.index', compact('preferences', 'page', 'search', 'data'));
    }

    public function edit($id)
    {
        $obj = ServiceCategory::find($id);
        $preferences = UserPreferences::getPreferences();
        return view('modules.service_categories.update', compact('preferences', 'obj'));
    }

    public function delete($id = false)
    {
        if ($id) {
            $obj = ServiceCategory::find($id);
            return $obj->deleteObj();
        }

        return response()->json([
            'status' => 400,
            'message' => 'Invalid ID provided.',
        ]);
    }
}
