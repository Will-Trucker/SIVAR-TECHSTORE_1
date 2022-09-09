<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistroMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $reg;
    public function __construct($reg)
    {
        //
        $this->reg = $reg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('tonochepe07@gmail.com'),env('MAIL_FROM_NAME'))
        ->view('registromail')
        ->subject('Creacion de Cuenta')
        ->with($this->reg);
    }
}
