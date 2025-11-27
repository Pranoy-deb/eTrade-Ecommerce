<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $categroise = Category::where('status',true)->get();
        $products = product::where('status',true)->latest()->take(8)->get();
        return view('frontend.index',compact('categroise','products'));
    }

    function showSingleProduct(product $product){
        return view('frontend.singleProduct',compact('product'));
    }
}
