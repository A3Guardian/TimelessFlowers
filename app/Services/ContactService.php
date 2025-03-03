<?php

namespace App\Services;

use App\Mail\AdminContactNotification;
use App\Models\Contact;
use App\Mail\AdminNotification;
use App\Mail\UserConfirmation;
use App\Mail\UserContactConfirmation;
use Illuminate\Support\Facades\Mail;

class ContactService
{
    public function createContact(array $data)
    {
        return Contact::create($data);
    }

    public function sendContactNotification(Contact $contact)
    {
        Mail::to($contact->email)->send(new UserContactConfirmation($contact));

        Mail::to(env('MAIL_ADMIN_EMAIL'))->send(new AdminContactNotification($contact));
    }
}
