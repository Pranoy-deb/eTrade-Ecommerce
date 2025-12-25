<?php

namespace App\Http\Controllers\Auth;

use App\Models\Orders;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class CustomerAuthController extends Controller
{

    use RegistersUsers;
    use AuthenticatesUsers;


    protected $redirectTo = '/customer/my-profile';
    // protected return redirect()->intended('/customer/my-profile');



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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'unique:customers'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    protected function create(array $data)
    {
        return Customer::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    function showProfile(){
        $customer = Auth::guard('customer')->user();
        $orders = Orders::where('email',auth('customer')->user()->email)->get();
        return view('frontend.my-account', compact('customer','orders'));
    }


    public function updateProfile(Request $request){

        $request->validate([
            'first_name' => 'required|string|max:255', 
            'last_name' => 'required|string|max:255', 
            'email' => 'required|email|max:255|unique:customers,email,' . auth('customer')->id(), 
            'phone' => 'nullable|string|max:20', 
            'city' => 'nullable|string|max:100', 
            'street_addr' => 'nullable|string', 
            'zip_code' => 'nullable|string|max:20', 
            'company' => 'nullable|string|max:255',
        ]);

        $customerId = auth('customer')->id();
        $customer   = Customer::findOrFail($customerId);

        if ($request->hasFile('profile_imge')) {
            // delete old image
            if ($customer->profile_imge && Storage::disk('public')->exists($customer->profile_imge)) {
                Storage::disk('public')->delete($customer->profile_imge);
            }

            // store new image
            $path = $request->file('profile_imge')->store('cus_profile', 'public');

            // update db
            $customer->profile_imge = $path;
            $customer->save();
        }

        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->phone_num = $request->phone;
        $customer->country = $request->country;
        $customer->city = $request->city;
        $customer->street_addr = $request->street_addr;
        $customer->zip_code = $request->zip_code;
        $customer->company = $request->company;
        
        $customer->update();
        

        return back();
    }
    


}
