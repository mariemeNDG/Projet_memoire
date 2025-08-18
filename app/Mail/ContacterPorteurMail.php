<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContacterPorteurMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mentorName;
    public $entrepreneurName;
    public $content;

    /**
     * Create a new message instance.
     */
    public function __construct($mentorName, $entrepreneurName, $content)
    {
        $this->mentorName = $mentorName;
        $this->entrepreneurName = $entrepreneurName;
        $this->content = $content;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject("Nouveau message de " . $this->mentorName)
                    ->view('emails.contacter_porteur');
    }
}
