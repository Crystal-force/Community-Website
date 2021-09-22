<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $user = \Auth::user();

        return view('pages\dashboard')->with([
            'logged_user' => $user,
        ]);
    }
}
