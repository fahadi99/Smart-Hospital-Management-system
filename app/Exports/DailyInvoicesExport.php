<?php

namespace App\Exports;

use Carbon\Carbon;
use App\Models\Invoice;
use Maatwebsite\Excel\Concerns\FromCollection;

class DailyInvoicesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $today = Carbon::now()->format('Y-m-d').'%';
        return Invoice::where('created_at', 'like', $today)->get();
    }
}
