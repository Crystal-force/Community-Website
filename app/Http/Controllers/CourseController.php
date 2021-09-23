<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        return view('pages\course');
    }

    public function coursedetail(Request $request) {
        // $course_id = $request->$id;
        return view('pages\course-detail');
    }

    public function logged_course() {
        return view('pages\lg-course');
    }
    public function logged_coursedetail() {
        return view('pages\lg-course-detail');
    }
}
