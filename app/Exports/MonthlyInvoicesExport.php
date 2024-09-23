<?php

namespace App\Exports;

use Carbon\Carbon;
use App\Models\Invoice;
use Maatwebsite\Excel\Concerns\FromCollection;

class MonthlyInvoicesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $date = Carbon::today()->subDays(30);
        return Invoice::where('created_at','>=',$date)->get();
    }
}
