<?php

namespace App\Http\Controllers\Backend;

use App\Models\Review;
use App\Models\product;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewsController extends Controller
{
    function reviews (product $product, Customer $customer){
        $reviews =  Review::with('customer')->orderby('approve')->latest()->paginate(30);
        return view('backend.reviews.index', compact('reviews'));
    }

    function approveReview($id){
        $reviews = Review::findOrFail($id);
        $reviews->approve = 1;
        $reviews->save();
        return back()->with('msg',[
            'icon' => 'success',
            'msg' => 'Review Successfully Approved'
            ]);
    }
}
