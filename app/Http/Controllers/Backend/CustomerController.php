<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function allCustomer(){
        $customers = Customer::latest()->paginate(20);
        return view('backend.customer.index',compact('customers'));
    }
}
