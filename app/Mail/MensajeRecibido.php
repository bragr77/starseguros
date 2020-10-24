<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MensajeRecibido extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Mensaje enviado a traves de la pagina starsseguros.com';
    public $datosemail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datosemail)
    {
        $this->datosemail = $datosemail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.mensaje-recibido');
    }
}
