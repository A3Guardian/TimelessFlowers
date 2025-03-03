<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Services\ContactService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function show()
    {
        return view('pages.contact.index');
    }

    public function submit(Request $request)
    {
        // Log::info('Contact Form Data:', [$request->all()]);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string',
            'message' => 'required|string',
        ]);

        $contact = $this->contactService->createContact($validated);

        $this->contactService->sendContactNotification($contact);

        return redirect()->route('contact.show')->with('success', 'Your message has been sent!');
    }
}
