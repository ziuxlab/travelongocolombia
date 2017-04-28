<?php

namespace App\Mail;

use App\message;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact_form extends Mailable
{
    use Queueable, SerializesModels;
    
    
    public $mensaje;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(message $message)
    {
        //
        $this->mensaje = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Message: ' . $this->mensaje->name)->view('emails.contact_form');
    }
}
