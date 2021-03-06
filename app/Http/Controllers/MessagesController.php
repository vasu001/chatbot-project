<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
            'name' =>'required',
            'email' => 'required'
        ]);

        $message = new Message;

        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        $message->save();


        return redirect('/#contact')->with('success', 'Message Sent');
    }
    public function submitForArt(Request $request){
        $this->validate($request, [
            'name' =>'required',
            'email' => 'required'
        ]);

        $message = new Message;

        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        $message->save();


        return redirect('botman_d_bs')->with('success', 'Message Sent');
    }
    public function getMessages(){
        $messages = Message::all();

        return view('storeMessages')->with('messages', $messages);
    }
}
