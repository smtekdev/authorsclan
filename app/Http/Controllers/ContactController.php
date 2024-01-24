<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormEmail; // Import your mailable
use App\Mail\ThankYouEmail;
// use Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('contactForm');
    }

    public function sendEmail(Request $request)
    {
        $detail = [
            'name' =>$request->name,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'msg' =>$request->msg,
        ];
        Mail::to('info@authorsclan.com')->send(new  ContactFormEmail($detail));
        return back()->with(['message' => 'Email successfully sent!']);
        Mail::to($request->input('email'))->send(new ThankYouEmail());

    // Redirect back with a success message or set a session message
    return redirect()->back()->with('message', 'Thank you for contacting us! Check your email for a confirmation.');
    }
}
