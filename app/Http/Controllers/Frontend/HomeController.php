<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $categroise = Category::where('status',true)->get();
        return view('frontend.index',compact('categroise'));
    }
}
