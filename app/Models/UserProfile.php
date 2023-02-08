<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'user_name', 'photo', 'nickname', 'firstName', 'lastName', 'identity_card',
    'description', 'facebook', 'instagram', 'youtube', 'linkedin', 'tiktok', 'verified_status', 'view_count'];

}
