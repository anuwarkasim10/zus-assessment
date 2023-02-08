<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;

class OrderExport implements FromView
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
        $data = Order::join('users', 'users.id', '=', 'orders.user_id')
        ->join('customer_details', 'users.id', '=', 'customer_details.user_id')
        ->select('orders.*','users.email', 'customer_details.address_1','customer_details.unit',  'customer_details.level', 'customer_details.country',  'customer_details.postcode', 'customer_details.phone')
        ->orderBy('orders.created_at', 'desc')
        ->get();

        return view('exports.order', compact('data'));
    }
}
