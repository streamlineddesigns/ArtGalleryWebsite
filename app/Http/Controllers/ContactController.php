<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email:rfc,dns',
            'phone' => 'nullable',
            'instagram' => 'nullable',
            'message' => 'required|string',
        ]);

        $this->sendemail($request);
        
        $collections = Collection::all()->reverse();
        return redirect('thankyou')->with(compact('collections'));
    }

    public function thankYou() 
    {
        $collections = Collection::all()->reverse();
        return View('thankyou', compact('collections'));
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'to' => "lauriea2005@gmail.com",
            'from' => "LaurieLaFrateArtGallery@gmail.com",
            'subject' => "Contact Form Submission",
            'title' => "Laurie LaFrate",

            "name"  => $request->name,
            "email"  => $request->email,
            "phone"  => $request->phone,
            "instagram"  => $request->instagram,
            "message"  => $request->message,

        ];

        Mail::to($details["to"])->send(new \App\Mail\ContactMail($details));

        if (Mail::failures()) {
            return back()->with('errors', "Couldn't send, try again?");
        }

        return;
    }
}