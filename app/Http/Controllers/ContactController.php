<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view("contact-us");
    }
    public function sendEmail(Request $request)
    {
        //validation
    	$this->validate($request,[
    		'name'=> 'required|max:255',
    		'email'=> 'required|max:255|email',
    		'message'=> 'required'
        ]);
        $details = [
            "name" => $request->name,
            "email" => $request->email,
            "message" => $request->message,
        ];
        Mail::to("yusuftoyib@gmail.com")->send(new ContactMail($details));
        return back ()->with("message_sent", "Your mesage has been sent");
    }
}
