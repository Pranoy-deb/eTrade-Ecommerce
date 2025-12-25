<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function addToCard(Request $request){

      $cartItem = Cart::where('product_id', $request->product_id)->where('customer_id', auth('customer')->id())->first();

      if ($cartItem) {
          $cartItem->increment('qty', $request->qty);
      } else {
          Cart::create([
              'product_id' => $request->product_id,
              'qty' => $request->qty,
              'customer_id' => auth('customer')->id(),
          ]);
      }
      return back();
    }
  
    function viewCard(){
      return view('frontend.cart');
    }

    function showCartItem(Cart $cart){
      return view('layouts.frontend',compact('cart'));
    }

    function checkOutPage(){
      return view('frontend.checkout');
    }

    function deleteCardItem(Request $request){
        $customerId = auth('customer')->id();
        $productId  = $request->product_id;

        $cartItem = Cart::where('customer_id', $customerId)->where('product_id', $productId)->first();
        $cartItem->delete();
        return back();
    }
}