<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InvoiceService extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['invoice_id', 'invoice_id', 'service_category_id', 'price','created_by'];

    public static function getInvoiceServices ($invoice_id) {

        $data  =  self::leftjoin('service_categories as sc','sc.id','invoice_services.service_category_id')
        ->where('invoice_services.invoice_id',$invoice_id)
        ->select([
            'sc.service_name as service_name',
            'invoice_services.*'
        ])
        ->get();

        return $data;

    }
}
