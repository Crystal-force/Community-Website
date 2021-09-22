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

    public function editprofile() {
        return view('pages\edit-profile');
    }
}
