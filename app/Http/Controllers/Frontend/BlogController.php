<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function showBlogPage(){
        return view('frontend.blog');
    }

    function singleBlogPage(){
        return view('frontend.singleblog');
    }
}
