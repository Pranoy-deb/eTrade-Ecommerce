<?php

namespace App\Http\Controllers\Auth;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class CustomerAuthController extends Controller
{

    use RegistersUsers;
    use AuthenticatesUsers;


    protected $redirectTo = '/customer/my-profile';



    function showLoginForm(){
        return view('auth.customer.sign-in');
    }

    function showSignUpForm(){
        return view('auth.customer.sign-up');
    }

    protected function guard()
    {
        return Auth::guard('customer');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    protected function create(array $data)
    {
        return Customer::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    function showProfile(){
        return view('frontend.my-account');
    }

}
