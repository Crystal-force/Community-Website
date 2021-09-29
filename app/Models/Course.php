<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $fillable = [
        'id',
        'user_id',
        'title',
        'image',
        'category',
        'facebook',
        'linkedin',
        'twitter',
        'instagram',
        'sub_title',
        'content',
        'customers',
        'favorite',
        'visitors',
        'price',
        'status'
    ];

    public function CourseReview() {
        return $this->hasMany('App\Http\Models\Review');
    }
    public function Course_User() {
        return $this->belongTo('App\Http\User', 'user_id');
    }
}
