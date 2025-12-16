<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     
    public function dashboard(){
        $adminUser = User::get();
        return view('backend.dashboard',compact('adminUser'));
    }
}
