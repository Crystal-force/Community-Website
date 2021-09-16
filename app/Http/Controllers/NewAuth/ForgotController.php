<?php

namespace App\Http\Controllers\NewAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotController extends Controller
{
    public function index() {
        return view('auth\forgotpassword');
    }
}
