<?php

namespace App\Exports;

use App\Models\DeliverySchedule;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;

class ScheduleExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;
    protected $visitor;

    function __construct($data) {
        $this->visitor = $data;
    }

    public function view(): View
    {
        $data = DeliverySchedule::join('products', 'delivery_schedules.product_id', '=', 'products.id')->select('delivery_schedules.*','products.id as product_id' ,'products.name as product_name')->get();

        return view('exports.schedule', compact('data'));
    }
}
