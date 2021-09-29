<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use File;
use app\User; 

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

    public function editcourse() {
        $id = Auth::id();
        $company = Company::where('user_id', $id)->first();
        $name = Auth::user()->name;
        $course = Course::where('user_id', $id)->get();
        
        $avatar = '../assets/img/blank/blank.png';
        
        // $title = '';
        // $image = '';
        // $date = '';
        // $category = '';
        // $sub_title = '';
        // $content = '';
        // $customers = '';
        // $favorite = '';
        // $visitors = '';
        // $price = '';
        // $status = '';

        if(isset($company)) {
            $avatar = $company->avatar;
        }

        // if(isset($course)) {
        //     $title = $course->title;
        //     $image = $course->image;
        //     $date = $course->updated_at;
        //     $category = $course->category;
        //     $sub_title = $course->sub_title;
        //     $content = $course->content;
        //     $customers = $course->customers;
        //     $favorite = $course->favorite;
        //     $visitors = $course->visitors;
        //     $price = $course->price;
        //     $status = $course->status;
           
        // }    
        return view('pages\edit-course')->with([
            'avatar' => $avatar,
            'name' => $name
        ]);
    }
}
