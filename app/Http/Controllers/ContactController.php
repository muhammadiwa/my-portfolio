<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function send(ContactRequest $request)
    {
        try {
            // Save to database
            ContactMessage::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);
            
            Mail::send(new ContactMail(
                name: $request->name,
                email: $request->email,
                phone: $request->phone,
                subjectLine: $request->subject, // Sesuaikan dengan nama baru
                messageContent: $request->message
            ));

            return back()->with('success', 'Thank you for your message. We will contact you soon!');
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong. Please try again later.');
        }
    }
}