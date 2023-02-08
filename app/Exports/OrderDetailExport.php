<?php

namespace App\Exports;

use App\Models\Order;
use App\Models\OrderProduct;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;

class OrderDetailExport implements FromView
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
        $id = (int) $this->id['id'];

        $user = Order::join('users', 'users.id', '=', 'orders.user_id')
        ->join('customer_details', 'users.id', '=', 'customer_details.user_id')
        ->where('orders.id', '=', $id)
        ->select('orders.*','users.email', 'customer_details.address_1', 'customer_details.level', 'customer_details.unit', 'customer_details.country',  'customer_details.postcode', 'customer_details.phone')
        ->get();

        $users = $user[0];

        $data = OrderProduct::join('products', 'products.id', '=', 'order_products.product_id')
        ->join('delivery_schedules', 'delivery_schedules.id', '=', 'order_products.delivery_schedule_id')
        ->where('order_products.order_id', '=', $id)
        ->select('order_products.*', 'products.name', 'products.booth_id', 'products.price', 'products.product_image', 'delivery_schedules.delivery_date', 'delivery_schedules.delivery_fee', 'delivery_schedules.slot')
        ->get();

        return view('exports.order-detail', compact('data', 'users'));
    }
}
