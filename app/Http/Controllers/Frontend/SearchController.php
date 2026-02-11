<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    // function Searching(Request $request){

    //     $search = $request->search;

    //     $products = Product::where(function($q) use ($search){

    //         $q->where('title','LIKE',"%$search%")
    //         ->orWhere('slug','LIKE',"%$search%")
    //         ->orWhere('sku','LIKE',"%$search%")
    //         ->orWhere('brand','LIKE',"%$search%")
    //         ->orWhere('short_details','LIKE',"%$search%")
    //         ->orWhere('features','LIKE',"%$search%");

    //     })->get();

    //     // return view('frontend.search', compact('products'));
    //     return response()->json($products);
    // }

    public function LiveSearch(Request $request)
{
    $search = $request->search;

    if(!$search){
        return response()->json([]);
    }

    $products = Product::where('title','LIKE',"%$search%")
        ->orWhere('slug','LIKE',"%$search%")
        ->orWhere('sku','LIKE',"%$search%")
        ->orWhere('brand','LIKE',"%$search%")
        ->orWhere('short_details','LIKE',"%$search%")
        ->orWhere('features','LIKE',"%$search%")
        ->limit(5)
        ->get();

    return response()->json($products);
}

}
