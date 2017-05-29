<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserNew extends Mailable
{
    use Queueable, SerializesModels;
	
	public $user;
	public $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$password)
    {
        //
	    $this->password = $password;
	    $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
	    return $this->subject('Wellcome to Travelongo ' . $this->user->name)->markdown('emails.new_user');
	
    }
}
