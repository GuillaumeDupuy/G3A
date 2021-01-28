<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\membre;

class SignUp extends Mailable
{
    use Queueable, SerializesModels;

    public $membre;

    public function __construct(array $membre)
    {
        $this->membre = $membre;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('ExamenPHP')
            ->subject('Vous avez maintenant un compte !')
            ->view('email.signUp');
    }
    
}
