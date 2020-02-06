<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessageCreated extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $unMessage;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $unMessage)
    {
        $this->name=$name;
        $this->email=$email;
        $this->unMessage=$unMessage;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this-> view ('emails.messages.created');
    }
}
