<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home.home');
    }

    public function detail()
    {
        return view('front.includes.product.detail');
    }
}
