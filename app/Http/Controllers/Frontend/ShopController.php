<?php

namespace App\Http\Controllers\Frontend;

use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class ShopController extends Controller
{
    function shopPage(){

        $products = product::where('status', true)->paginate(20);
        $categories = Category::where('status', true)->select('id','title','slug')->get();

        return view('frontend.shop', compact('products','categories'));
    }
}
