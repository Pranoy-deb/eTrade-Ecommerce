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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'unique:customers'],
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
        $customer = Auth::guard('customer')->user();
        $orders = Orders::where('email',auth('customer')->user()->email)->get();
        return view('frontend.my-account', compact('customer','orders'));
    }


    public function updateProfile(Request $request)
{
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

    return back();
}
    


}
