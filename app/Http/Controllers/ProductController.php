<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('pages\product');
    }

    public function productdetail(Request $request) {
        return view('pages\product-detail');
    }

    public function newproduct(Request $request) {
        return view('pages\new-product');
    }

    public function logged_products() {
        return view('pages\lg-products');
    }

    public function logged_products_detail() {
        return view('pages\lg-product-detail');
    }
}
