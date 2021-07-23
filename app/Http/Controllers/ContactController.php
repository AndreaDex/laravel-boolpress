<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        Mail::to('prova@admin.com')->send(new ContactMail($validated));
        return redirect()->back()->with('message', 'Grazie per averci contattato.');
    }
}
