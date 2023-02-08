<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const CHECKOUT = 1;
    const PAYMENT_SUCCESS = 2;
    const PAYMENT_DECLINED = 3;
    const CHECKOUT_CANCELLED = 4;
    const CHECKOUT_EXPIRED = 5;

    protected $fillable = [ 'user_id', 'total', 'status_id', 'remark', 'session_id', 'total_delivery_fee', 'payment_method_id', 'customer_detail_id'];
}
