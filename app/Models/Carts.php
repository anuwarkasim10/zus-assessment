<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;

    // protected $appends = ['schedule'];

    protected $fillable = ['user_id', 'product_id', 'quantity', 'price_qty', 'booth_id', 'delivery_schedule_id', 'unit_price'];

}
