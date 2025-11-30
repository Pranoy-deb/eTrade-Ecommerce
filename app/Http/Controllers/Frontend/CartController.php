<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function addToCard(Request $request){
        dd($request->all());
        return view('frontend.cart');
    }
}
