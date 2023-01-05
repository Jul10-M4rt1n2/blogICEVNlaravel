<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AllSendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; //variavel que vai receber os dados do formulario

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emails)
    {
        $this->data = $emails; //atribui os dados do formulario a variavel da classe
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Novidades no site'); //assunto do email
        $this->cc($this->data['email'], //destinatario do email
        $this->data['description'], //mensagem do email
        $this->attach(public_path($this->data['image']))); //anexo do email

        return $this->markdown('site.mail.show', [
            'data' => $this->data
        ]);
    }
}
