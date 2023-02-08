<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    // protected $fillable = [ 'user_id', 'product_id', 'quantity','price_qty', 'booth_id', 'delivery_schedule_id'];
    protected $fillable = [ 'order_id', 'product_id','quantity', 'price_qty', 'booth_id', 'delivery_schedule_id'];
}
