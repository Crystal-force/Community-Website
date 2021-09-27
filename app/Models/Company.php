<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $fillable = [
        'id',
        'user-id',
        'name',
        'avatar',
        'phone-number',
        'language',
        'location',
        'city',
        'zip-code',
        'country',
        'about',
        'students',
    ];

    public function Company_User() {
        return $this->belongTo('App\Http\User', 'user-id');
    }
}
