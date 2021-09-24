<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function accountsetting() {
        return view('pages\account-setting');
    }
}
