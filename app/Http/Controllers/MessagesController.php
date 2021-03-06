<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
      
       //  return $request->input('name');
       $this->validate($request,[
        'name'=>'required|min:4',
        'email'=>'required'
       ]);
      //create new message
     $message=new Message;
     $message->name=$request->input('name');
     $message->email=$request->input('email');
     $message->message=$request->input('message');
   
     //Save Message
     $message->save();
     //redirect
     return redirect('/')->with('status' ,'Message sent successfully');
    
    }


    public function getMessages(){

        $messages=Message::all();
        return view('messages')->with('messages',$messages);

    }




}
