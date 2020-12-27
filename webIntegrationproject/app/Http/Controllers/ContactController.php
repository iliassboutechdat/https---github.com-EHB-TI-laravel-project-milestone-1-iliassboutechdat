<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;

class ContactController extends Controller
{
    //
    public function contact(){
        return view('contact');
    }

    public function sendEmail(Request $request){
        $details = [
            'name' => $request->name,
            "topic" => $request->topic,
            "email" => $request->email, 
            "phone" => $request->phone,
            "content"=>$request->content
        ];


    Mail::to('9078014c0f-7e164e@inbox.mailtrap.io')->send(new Contact($details));

    if (Mail::failures()) {
        returnWithMessage("error");
        return redirect()->to('/contact')->with('failure','An error has occured while sending your email, please try again.');

    }
    return redirect()->to('/contact')->with('success','We have succesfully received your email and will be responding soon. Thank you!');


    }

}