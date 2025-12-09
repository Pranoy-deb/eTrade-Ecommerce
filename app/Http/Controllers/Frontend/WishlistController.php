<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    function wishlistPage(){
        $wishlist = Wishlist::with(['product', 'customer'])->where('customer_id',auth('customer')->id())->get();
        // dd($wishlist);
        return view('frontend.wishlist', compact('wishlist'));
    }

    function addWishlist(Request $request){

        $Check = Wishlist::where('product_id', $request->product_id)->where('customer_id', auth('customer')->id())->exists();
        if ($Check) {
            return back();
        } else{
        Wishlist::create([
            'product_id' => $request->product_id,
            'customer_id' => auth('customer')->user()->id
        ]);
      }
        return back();
    }

    function hasWishlist(){
        $wishlist = Wishlist::where('customer_id', auth('customer')->id())->pluck('product_id')->toArray();
        return view('frontend.shop',compact('wishlist'));
    }

    function deleteWishlist(Request $request){
            $wishlist = Wishlist::find($request->wishlist_id);
            if($wishlist){
                $wishlist->delete();
            }
            return back();
        }
    
}



