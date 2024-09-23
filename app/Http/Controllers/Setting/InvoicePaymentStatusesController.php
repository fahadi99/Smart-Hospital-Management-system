<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;
use App\Models\UserPreferences;
use App\Http\Controllers\Controller;
use App\Models\InvoicePaymentStatus;

class InvoicePaymentStatusesController extends Controller
{
    public function create(Request $request)
    {
        $preferences = UserPreferences::getPreferences();
        $ips = 'Invoice Payment Status';
        return view('modules.invoice_payment_statuses.create', compact('preferences', 'ips'));
    }

    public function store(Request $request)
    {
        $obj = new InvoicePaymentStatus();
        return $obj->addForm($request);
    }

    public function update(Request $request)
    {
        $obj = InvoicePaymentStatus::find($request->id);
        return $obj->updateForm($request);
    }

    public function index(Request $request)
    {
        $d = InvoicePaymentStatus::getAll();

        $page = 'invoice_payment_statuses';
        $ips = 'Invoice Payment Status';
        $data = $d['data'];
        $search = $d['search'];

        if ($request->ajax()) {
            return response()->json([
                'status' => 200,
                'data' => view('modules.invoice_payment_statuses.include.list_partial', compact('data', 'ips', 'page', 'search'))->render(),
            ]);
        }

        $preferences = UserPreferences::getPreferences();

        return view('modules.invoice_payment_statuses.index', compact('preferences', 'page', 'search', 'data', 'ips'));
    }

    public function edit($id)
    {
        $obj = InvoicePaymentStatus::find($id);
        $preferences = UserPreferences::getPreferences();
        $ips = 'Invoice Payment Status';
        return view('modules.invoice_payment_statuses.update', compact('preferences', 'obj', 'ips'));
    }

    public function delete($id = false)
    {
        if ($id) {
            $obj = InvoicePaymentStatus::find($id);
            return $obj->deleteObj();
        }

        return response()->json([
            'status' => 400,
            'message' => 'Invalid ID provided.',
        ]);
    }
}
