<?php

namespace App\Http\Controllers\Frontend;

use App\Models\product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Review;

class SingleProductPageController extends Controller
{
    function showSingleProduct(product $product, Customer $customer){
        $product = product::with('category')->findOrFail($product->id);
        $wishlist = Wishlist::where('customer_id', auth('customer')->id())->pluck('product_id')->toArray();
        $reviews =  Review::with('customer')->where('product_id',$product->id)->where('approve',1)->latest()->get();
        $avg_rating = Review::where('product_id', $product->id)->where('approve', 1)->avg('rating');

        // dd(round($avg_rating));
        return view('frontend.singleProduct',compact('product','wishlist','reviews','avg_rating'));
    }

    function userReview(Request $request){
        // dd($request->all());
        $request->validate([
                'rating' => 'required'
        ]);
        
        Review::create([
            'cus_id' => $request->auth_user_id,
            'product_id' => $request->product_id,
            'msg' => $request->user_msg,
            'rating' => $request->rating
        ]);

        return back();
        
    }
}
