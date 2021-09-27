<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index() {
        return view('pages\companies');
    }

    public function companiesprofile(Request $request) {
        return view('pages\companies-profile');
    }

    function saveavatar(Request $request) {
        dd('test');
        // dd($request);
    }



    public function editprofile() {
        return view('pages\edit-profile');
    }

    public function logged_companies() {
        return view('pages\lg-companies');
    }

    public function logged_companiesprofile() {
        return view('pages\lg-companies-profile');
    }
}
