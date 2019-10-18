<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class LoginMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $userName;
    protected $userEmail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userName, $userEmail)
    {
        $this->userName = $userName;
        $this->userEmail = $userEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.login')
            ->with(['userName'=>$this->userName,'userEmail'=>$this->userEmail])
            ->from('support@web-door.net')
            ->to('Anton.Krivchik@t-agency.ru');
    }
}
