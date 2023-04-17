<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Envio extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $name;
    public $last_name;
    public $assunto;
    public $message;
    public $email;

    public function __construct($data)
    {
        $this->name = $data['name'] . " " . $data['last_name'];
        $this->assunto = $data['subject'];
        $this->message = $data['message'];
        $this->email = $data['email'];
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('hightfashion@gmail.com', 'Igor Roupas'),
            subject: $this->assunto,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'contact',
            with: [
                'name'=> $this->name,
                'last_name'=>$this->last_name,
                'subject'=> $this->subject,
                'messages'=> $this->message,
                'email'=> $this->email,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}