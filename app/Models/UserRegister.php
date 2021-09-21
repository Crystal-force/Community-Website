<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRegister extends Model
{
    public $fillable = [
        'id',
        'name',
        'email',
        'password',
        'date',
        'time'
    ];
}
