<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use Illuminate\Mail\Mailables\Address;

class YourPassword extends Mailable
{
    use Queueable, SerializesModels;

    public $r_password;
    /**
     * Create a new message instance.
     */
    public function __construct(protected User $user ,$r_password)
    {
        $this->user = $user;
        $this->r_password = $r_password;

        return new Content(
            view:'auth.yourpassword',
        );
    }

    /**
     * Get the message envelope.
     */
    public function envelope($name): Envelope
    {
        return new Envelope(
            from: new Address('hyggy@example.com','Hygge'),
            subject: 'Hello!'.$name .'Your Password',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'auth.yourpassword',
            with:[
                'password' => $this->user->password,
                'name' =>$this->user->name,
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
