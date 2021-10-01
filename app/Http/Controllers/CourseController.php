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
        
        // if(isset($company)) {
        //     $course_img = $course['0']['image'];
            
        // }  
        
        return view('pages\edit-course')->with([
            'id' => $id,
            'avatar' => $company->avatar,
            'name' => $name,
            'course' => $course,
        ]);
    }

    public function addnewcourse(Request $request) {
        $user_id = $request->input('id');
        $title = $request->input('title');
        $file = $request->file('file');
        $category = $request->input('category');
        $sub_title = $request->input('sub_title');
        $content = $request->input('content');
        $price = $request->input('price');
        $facebook = $request->input('facebook');
        $twitter = $request->input('twitter');
        $instagram = $request->input('instagram');
        $linkedin = $request->input('linkedin');

        if(!isset($title) || !isset($file) || !isset($category) || !isset($sub_title) || !isset($content) || !isset($price)) {
            return response()->json(['data' => '0']);
        }

        $originalfilename = str_replace(' ', '', $file->getClientOriginalName());
        $fileName = md5(uniqid(rand(), true)).$originalfilename;
        $path = $file->storeAs('/course/new', $fileName);
        $db_link = '/storage'.'/'.$path;

        $res = Course::create([
            'user_id' => $user_id,
            'title' => $title,
            'image' => $db_link,
            'category' => $category,
            'facebook' => $facebook,
            'linkedin' => $linkedin,
            'twitter' => $twitter,
            'instagram' => $instagram,
            'sub_title' => $sub_title,
            'content' => $content,
            'customers' => "0",
            'favorite' => "0",
            'visitors' => "0",
            'price' => $price,
            'status' => "0"
        ]);
        
        return response()->json(['data' => '1']);
    }

    public function changecourse(Request $request) {
        $course_id = $request->course_id;
        $course = Course::where('id', $course_id)->first();
        
        return response()->json(['data' => $course]);
    }

    public function changesavecourse(Request $request) {
        $data = $request->input();
        unset($data['file']);
        $file = $request->file('file');
        $db_link = Course::where('id', $data['id'])->first()->image;
        if(isset($file)) {
            $originalfilename = str_replace(' ', '', $file->getClientOriginalName());
            $fileName = md5(uniqid(rand(), true)).$originalfilename;
            $path = $file->storeAs('/course/new', $fileName);
            $db_link = '/storage'.'/'.$path;
        }
        
        $data['image'] = $db_link;

        $res = Course::where('id', $data['id'])->update($data);

        if($res == 1) {
            return response()->json(['data' => '1']);
        }
    }

    public function viewcourse(Request $request) {
        $id = $request->id;

        $course = Course::where('id', $id)->first();

        return response()->json(['data', $course]);
    }
}
