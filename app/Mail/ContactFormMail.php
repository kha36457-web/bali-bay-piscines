<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public Contact $contact;

    /**
     * Create a new message instance.
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        $subject = 'Nouveau message de contact';
        if (!empty($this->contact->produit)) {
            $subject .= ' — ' . $this->contact->produit;
        }

        return $this->subject($subject)
                    ->view('emails.contact_form')
                    ->with(['contact' => $this->contact]);
    }
}
