<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index() {
        return view('pages\companies');
    }
}
