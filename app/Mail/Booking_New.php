<?php

namespace App\Mail;

use App\booking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Booking_New extends Mailable
{
    use Queueable, SerializesModels;
	
	
	public $booking;
	
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(booking $booking)
    {
        //
	    $this->booking = $booking;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Booking: ' . $this->booking->id)->markdown('emails.booking.new');
    }
	
}
