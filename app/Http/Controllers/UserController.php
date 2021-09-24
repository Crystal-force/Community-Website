<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userlist() {
        return view('pages\user-list');
    }
}
