<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Contact;

class ContactController extends Controller
{
    public function contacts()
    {
        return view('guest.contacts');
    }

    public function sendForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'dob' => 'required | date',
            'email' => 'required | email',
            'message' => 'required'
        ]);
        /* 
         * Render dell'email
         return (new ContactMail($validated))->render();
        */

        /* 
        * Invio dell'email
        */
        $mail = Contact::create($validated);
        Mail::to('prova@admin.com')->send(new ContactMail($mail));
        return redirect()->back()->with('message', 'Grazie per averci contattato.');
    }
}
