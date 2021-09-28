<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $fillable = [
        'id',
        'user_id',
        'name',
        'avatar',
        'phone_number',
        'language',
        'location',
        'city',
        'zip_code',
        'country',
        'about',
        'students',
    ];

    public function Company_User() {
        return $this->belongTo('App\Http\User', 'user-id');
    }
}
