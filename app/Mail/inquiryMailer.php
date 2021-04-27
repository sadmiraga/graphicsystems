<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class inquiryMailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */


    public $machine, $email, $companyName, $fullName, $phone, $website, $emailMessage;

    public function __construct($machine, $email, $companyName, $fullName, $phone, $website, $emailMessage)
    {
        $this->machine = $machine;
        $this->email = $email;
        $this->companyName = $companyName;
        $this->fullName = $fullName;
        $this->phone = $phone;
        $this->website = $website;
        $this->emailMessage = $emailMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from("no-reply@graphic-systems.com")->view('inquiryMailer');
    }
}
