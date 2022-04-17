<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    protected $contactUsData;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($contactUsData)
    {
        $this->contactUsData = $contactUsData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact-us')->with([
            'name' => $this->contactUsData->name,
            'email' => $this->contactUsData->email,
            'phone' => $this->contactUsData->phone,
            'subject' => $this->contactUsData->subject,
            'message' => $this->contactUsData->message,
        ]);
    }
}
