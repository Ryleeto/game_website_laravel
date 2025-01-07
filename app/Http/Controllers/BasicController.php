<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact() {
        return view('contact');
    }

    public function productDetails() {
        return view('product-details');
    }  

    public function shop() {
        return view('shop');
    } 
}
