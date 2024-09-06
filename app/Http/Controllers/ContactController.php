<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone_number' => 'nullable|string|max:20',
            'msg_subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);


        Mail::to('arsh3y@gmail.com')->send(new ContactMail($request->all()));


        return redirect()->route('contact')->with('success', 'Votre message a été envoyé avec succès.');
    }

    public function confirm()
    {
        $data = session('data');
        return view('front.confirm', compact('data'));
    }
}
