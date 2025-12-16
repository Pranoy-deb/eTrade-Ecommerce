<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function contactPage(){
        return view('frontend.contact');
    }

    function sendMsg(Request $request){
        $request->validate([
            'user_name'=>'required',
            'user_phone'=>'nullable',
            'user_email'=>'required|email',
            'user_msg'=>'required|min:5',
        ]);
        // dd($request->all());
        Contacts::create([
            'name' => $request->user_name,
            'msg' => $request->user_msg,
            'phone' => $request->user_phone,
            'email' => $request->user_email,
        ]);
        return back()->with('swal', [
        'title' => 'Message Sent!',
        'text'  => 'Your message successfully sent.',
        'icon'  => 'success'
    ]);


    }
}
