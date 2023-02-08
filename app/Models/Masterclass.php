<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masterclass extends Model
{
    use HasFactory;

    protected $fillable = [ 'user_id', 'name', 'masterclass_1', 'masterclass_2', 'masterclass_3', 'masterclass_4', 'masterclass_5', 'masterclass_6', 'masterclass_7', 'masterclass_8', 'masterclass_9'];
}
