<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Carbon;

class VerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
        public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function build()
    {
        $url = url('/verify-email/'.$this->user->verification_token);

        return $this->subject('Vérification de votre email')
                    ->view('emails.verify')
                    ->with([
                        'name' => $this->user->name,
                        'url' => $url,
                    ]);
    }
    /**
     * Get the message envelope.
     */

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
