<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home.home',[
            'products' => Product::where('status', 1)->get(),
            'productArival' => Product::where('status', 1)->orderBy('id', 'DESC')->get(),
            'categories' => Category::where('status', 1)->get(),
            'brands' => Brand::where('status', 1)->get(),
        ]);
    }

    public function detail($id)
    {
        return view('front.includes.product.detail',[
            'product' => Product::find($id),
        ]);
    }
}
