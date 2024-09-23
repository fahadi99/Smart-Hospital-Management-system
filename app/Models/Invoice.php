<?php

namespace App\Models;

use Response;
use Carbon\Carbon;
use App\Models\Invoice;
use App\Models\Patient;
use App\Jobs\GenerateInvoice;
use App\Models\InvoiceService;
use App\Models\ServiceCategory;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\DailyInvoicesExport;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\WeeklyInvoicesExport;
use App\Exports\MonthlyInvoicesExport;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;
    use SoftDeletes;

    public static function getAll()
    {
        $request = request();

        $search['q'] = $request->has('q') ? $request->get('q') : false;
        $search['status'] = $request->has('status') ? $request->get('status') : false;

        $data = self::leftjoin('invoice_payment_statuses as ips', 'ips.id', 'invoices.invoice_payment_status_id')
            ->select(['invoices.*', 'ips.name as payment_status']);

        if ($search['q']) {
            $data = $data->where('invoices.receipt_number', 'iLIKE', "%{$search['q']}%");
        }

        if ($search['status'] !== false) {
            $data = $data->where('invoices.invoice_payment_status_id', $search['status']);
        }

        $rtn['search'] = $search;
        $rtn['data'] = $data->orderBy('invoices.created_at', 'desc')->paginate(10);

        return $rtn;
    }



    public function addForm($request = false)
    {
        if ($request === false) {
            $request = request();
        }

        $request->validate([
            'patient_id' => ['required'],
            'discount_amount' => ['required'],
            'services.*' => ['required'],
        ]);



        $obj = new Invoice;
        $obj->patient_id = $request->patient_id;
        $obj->date_issued = Carbon::parse($request->date_issued);
        $obj->total_amount = 0;
        $obj->invoice_payment_status_id = 1;
        $obj->discount_amount = 0;
        $obj->net_amount = 0;
        $obj->amount_received = 0;
        $obj->created_by = auth()->user()->id;
        $obj->save();

        $price = 0;
        $total_amount = 0;
        $amount_received = 0;
        $net_amount = 0;
        $total_services = 0;
        $filldata_services = 0;
        $discount_amount = 0;
        $patient = null;

        if ($request->services) {
            $services = $request->services;
            foreach ($services as $service) {
                $patient = Patient::find($obj->patient_id);
                if ($patient->patient_category) {
                    $priceObj = ServiceCategory::getAmountCharged($patient->patient_category, $service);
                    $price = (integer) $priceObj['0'];
                    $matchThese = ['invoice_id' => $obj->id, 'service_category_id' => $service];
                    InvoiceService::updateOrCreate($matchThese, ['price' => $price, 'created_by' => auth()->user()->id]);
                    $total_amount = $total_amount + $price;
                    $total_services++;
                }
            }
        }

        if ($request->discount_amount == 'no_discount') { $discount_amount = 0; }
        else if ($request->discount_amount == 'full_discount') { $discount_amount = $total_amount; }

        $obj->discount_amount = $discount_amount;
        $obj->update();

        $net_amount = $total_amount - $obj->discount_amount;
        $amount_received = $total_amount - $obj->discount_amount;

        $obj->net_amount = $net_amount;
        $obj->amount_received = $amount_received;
        $obj->total_amount = $total_amount;
        $obj->receipt_number = intval($obj->id) + 1000;
        $obj->update();

        if ($total_services < 10) {
            $filldata_services = 10 - $total_services;
        }

        // $job = (new GenerateInvoice($data))
        // ->delay(now()->addMinutes(1));
        //    dispatch($job);
        return $this->generatePDF($filldata_services, $obj, $patient);

    }

    public function generatePDF($filldata_services, $obj, $patient)
    {


        $invoice_services = InvoiceService::getInvoiceServices($obj->id);

        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
            ->loadView('documents.receipts.latest', compact('patient', 'invoice_services', 'filldata_services', 'obj'));

        $dir = self::getInvoicesDir();
        $extension = 'pdf';
        $FileName = strtolower(time() . '_' . rand(1000, 9999) . '.' . $extension);
        $path = public_path() . '/' . $dir;
        File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
        $pdf->save($path . $FileName);
        $file = $path . $FileName;

        $obj->receipt_file_name = $FileName;
        $obj->receipt_file_full_path = $file;
        $obj->update();


        $headers = array(
            'Content-Type: application/pdf',
        );

        return Response::download($file, $FileName, $headers);

    }

    public static function getInvoicesDir()
    {
        return 'assets/invoices/';
    }

    public function deleteObj()
    {
        $this->deleted_by = auth()->user()->id;
        $this->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Receipt has been deleted successfully',
        ]);
    }

    public function generateReport ($request = false) {
        if ($request === false) {
            $request = request();
        }

        $request->validate([
            'invoice_duration' => ['required'],
        ]);

        switch ($request->invoice_duration) {
            case 'daily':
                return Excel::download(new DailyInvoicesExport, 'daily_invoices.xlsx');
                break;
            case 'weekly':
                return Excel::download(new WeeklyInvoicesExport, 'weekly_invoices.xlsx');
              break;
            case 'monthly':
                return Excel::download(new MonthlyInvoicesExport, 'monthly_invoices.xlsx');
              break;
            default:
                return Excel::download(new DailyInvoicesExport, 'daily_invoices.xlsx');
         }

         session()->flash('success', 'Report downloaded successfully');
         return Redirect::route('reports.create');

    }


}
