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

    public function logged_forum() {
        return view('pages\lg-forum');
    }

    public function logged_forum_comment() {
        return view('pages\lg-forum-comment');
    }

    public function newtopic() {
        return view('pages\new-topic');
    }
}
