<?php

namespace App\Http\Controllers\Frontend;

use App\Models\product;
use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function index() {
        $categroise = Category::where('status',true)->get();
        $products = product::where('status',true)->latest()->take(8)->get();
        $wishlist = Wishlist::where('customer_id', auth('customer')->id())->pluck('product_id')->toArray();

        return view('frontend.index',compact('categroise','products','wishlist'));
    }

    function showSingleProduct(product $product){
        $product = product::with('category')->findOrFail($product->id);
        $wishlist = Wishlist::where('customer_id', auth('customer')->id())->pluck('product_id')->toArray();
        return view('frontend.singleProduct',compact('product','wishlist'));
    }
}
