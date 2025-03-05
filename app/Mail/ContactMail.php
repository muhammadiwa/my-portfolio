<?php

namespace App\Mail;

use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $name,
        public string $email,
        public string $phone,
        public string $subjectLine,
        public string $messageContent
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->email, $this->name),
            to: ['muhammad.iwa94@gmail.com'],
            subject: 'Contact Form: ' . $this->subjectLine,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact', // Changed from markdown to view
            with: [
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'subjectLine' => $this->subjectLine,
                'messageContent' => $this->messageContent,
            ],
        );
    }
}