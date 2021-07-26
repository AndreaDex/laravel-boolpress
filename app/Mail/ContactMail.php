<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Contact;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;


    protected $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // ddd($this->contact->message);

        return $this
            ->from('noreply@noreply.com')
            ->subject('Unknow')
            ->view('emails.contacts')->with([
                'name' => $this->contact->name,
                'surname' => $this->contact->surname,
                'mail_message' => $this->contact->message,
                'email' => $this->contact->email,
            ]);
    }
}
