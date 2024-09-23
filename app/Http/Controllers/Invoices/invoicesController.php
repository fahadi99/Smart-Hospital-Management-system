<?php

namespace App\Http\Controllers\Invoices;

use App\Models\Invoice;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Models\UserPreferences;
use App\Http\Controllers\Controller;
use App\Models\InvoicePaymentStatus;
use Response;

class invoicesController extends Controller
{
    public function create(Request $request)
    {
        $payment_statuses = InvoicePaymentStatus::getActivePaymentStatuses();
        $patients = Patient::getForSelect();
        $preferences = UserPreferences::getPreferences();
        $serviceCategories = ServiceCategory::getActiveServiceCategories();

        return view('modules.invoices.create', compact('preferences','payment_statuses','patients','serviceCategories'));
    }

    public function store(Request $request)
    {
        $obj = new Invoice();
        return $obj->addForm($request);
    }

    public function update(Request $request)
    {
        $obj = new Invoice();
        return $obj->updateForm($request);
    }

    public function index(Request $request)
    {
        $d = Invoice::getAll();
        $payment_statuses = InvoicePaymentStatus::getActivePaymentStatuses();

        $page = 'invoices';
        $data = $d['data'];
        $search = $d['search'];

        if ($request->ajax()) {
            return response()->json([
                'status' => 200,
                'data' => view('modules.invoices.include.list_partial', compact('data', 'page', 'search'))->render(),
            ]);
        }

        $preferences = UserPreferences::getPreferences();
        return view('modules.invoices.index', compact('preferences', 'page', 'search', 'data','payment_statuses'));
    }

    public function edit($id)
    {
        $obj = Invoice::find($id);
        $preferences = UserPreferences::getPreferences();
        return view('modules.invoices.update', compact('preferences', 'obj'));
    }

    public function delete($id = false)
    {
        if ($id) {
            $obj = Invoice::find($id);
            return $obj->deleteObj();
        }
    }

    public function download_invoice ($id) {
        if ($id) {
            $invoice = Invoice::find($id);
            $headers = array(
                'Content-Type: application/pdf',
            );

            return response()->file($invoice->receipt_file_full_path, [
                'Content-Type' => 'application/pdf',
            ]);
        }
    }

}
