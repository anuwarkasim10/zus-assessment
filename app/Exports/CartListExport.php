<?php

namespace App\Exports;

use App\Models\Carts;
use App\Models\OrderProduct;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;

class CartListExport implements FromView
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

        $user = User::where('id', $id)->pluck('email');
        $email = $user[0];

        $data = Carts::join('products', 'products.id', '=', 'carts.product_id')
        ->join('delivery_schedules', 'delivery_schedules.id', '=', 'carts.delivery_schedule_id')
        ->join('users', 'users.id', '=', 'carts.user_id')
        ->where('carts.user_id', '=', $id)
        ->select('carts.*', 'users.email', 'products.id as product_id', 'products.name', 'products.booth_id', 'products.price', 'products.product_image', 'delivery_schedules.delivery_date', 'delivery_schedules.delivery_fee', 'delivery_schedules.slot')
        ->orderBy('delivery_schedules.delivery_date', 'desc')
        ->get();

        return view('exports.cart-list', compact('data', 'email'));
    }



}
