<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewUserMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $password;
    public $websiteUrl;

    /**
     * Create a new message instance.
     */
    public function __construct($user, $password)
    {
        $this->user = $user;
        $this->password = $password;
        $this->websiteUrl = env('APP_URL');
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Your Account Details')
            ->view('emails.new_user');
    }
}
