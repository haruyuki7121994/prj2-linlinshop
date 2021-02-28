<?php

namespace App\Mail;

use App\User;
use Illuminate\Mail\Mailable;

class VerifyMail extends Mailable
{
    /**
     * @var User
     */
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        $user = $this->user;
        return $this->view('emails.verify', compact('user'));
    }
}
