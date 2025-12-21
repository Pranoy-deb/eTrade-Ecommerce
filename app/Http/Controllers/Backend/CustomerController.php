<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function allCustomer(){
        $customers = Customer::get();
        return view('backend.customer.index',compact('customers'));
    }
}
