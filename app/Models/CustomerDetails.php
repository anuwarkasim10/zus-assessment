<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDetails extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'address_1', 'address_2', 'postcode', 'country', 'phone', 'preferred', 'name', 'unit', 'level'];
}
