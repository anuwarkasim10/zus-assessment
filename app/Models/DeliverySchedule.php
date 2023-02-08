<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliverySchedule extends Model
{
    use HasFactory;

    protected $fillable = [ 'delivery_date', 'slot', 'delivery_fee', 'product_id', 'available_delivery'];
}
