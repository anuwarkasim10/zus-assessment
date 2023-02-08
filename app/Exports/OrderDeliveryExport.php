<?php

namespace App\Exports;

use App\Models\OrderProduct;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;

class OrderDeliveryExport implements FromView
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

        $data = OrderProduct::join('delivery_schedules', 'delivery_schedules.id', '=', 'order_products.delivery_schedule_id')
        ->join('orders', 'orders.id', '=', 'order_products.order_id')
        ->join('products', 'order_products.product_id', '=', 'products.id')
        ->join('customer_details', 'customer_details.user_id', '=', 'orders.user_id')
        ->join('users', 'users.id', '=', 'customer_details.user_id')
        ->where('orders.status_id', 2)
        ->select('users.email','order_products.product_id', 'order_products.order_id', 'orders.created_at', 'delivery_schedules.delivery_date',  'products.product_image', 'products.name', 'products.booth_id','customer_details.address_1', 'customer_details.postcode', 'customer_details.country', 'customer_details.phone', 'customer_details.name as customer', 'customer_details.unit', 'customer_details.level', 'orders.remark', 'order_products.quantity')
        ->orderBy('orders.created_at', 'desc')
        ->get();

        return view('exports.order-delivery', compact('data'));
    }
}
