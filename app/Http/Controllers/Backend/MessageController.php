<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    function showUserMsg(){
        $messages = Contacts::orderBy('status')->latest()->get();
        return view('backend.message.index',compact('messages'));
    }

    function markAsRead(Contacts $message) {
        $message->status = 1;
        $message->save();

        return back()->with('msg',[
            'icon' => 'success',
            'msg' => 'Message Successfully Readed'
            ]);
    }


}
