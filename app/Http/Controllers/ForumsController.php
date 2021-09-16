<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumsController extends Controller
{
    public function index() {
        return view('pages\forums');
    }

    public function forumcomment(Request $request) {
        return view('pages\forum-comment');
    }
}
