<?php

namespace App\Exports;


use App\Models\OrderProduct;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;

class OrderAllDetailExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;
    protected $visitor;

    function __construct($data) {
        $this->id = $data;
    }

    public function view(): View
    {

        $data = OrderProduct::join('products', 'products.id', '=', 'order_products.product_id')
        ->join('delivery_schedules', 'delivery_schedules.id', '=', 'order_products.delivery_schedule_id')
        ->join('orders', 'orders.id', '=', 'order_products.order_id')
        ->join('users', 'users.id', '=', 'orders.user_id')
        ->select('order_products.*', 'users.email', 'products.name', 'products.booth_id', 'products.price', 'products.product_image', 'delivery_schedules.delivery_date', 'delivery_schedules.delivery_fee', 'delivery_schedules.slot')
        ->orderBy('orders.id', 'desc')
        ->get();

        return view('exports.order-all-detail', compact('data'));
    }
}
