<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $fillable = [
        'id',
        'course_id',
        'name',
        'avatar',
        'content'
    ];

    public function Course_User() {
        return $this->belongTo('App\Http\User', 'course_id');
    }
}
