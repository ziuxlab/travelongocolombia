<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class joinmail extends Mailable
{
    use Queueable, SerializesModels;

    public $file;


    /**
     *
     *
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($file)
    {
        //
       $this->file = $file;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Join us travelongo')->markdown('emails.join')
            ->attach(
                $this->file->getRealPath(),
                ['as'   =>  $this->file->getClientOriginalName(),
                    'mime' =>  $this->file->getMimeType()
                ]);

    }
}
