<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; //variavel que vai receber os dados do formulario

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
    
        $this->data = $data; //atribui os dados do formulario a variavel da classe
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');
        $this->subject('Formulário de contato ICEVN');
        $this->to($this->data['email'], $this->data['name']);

        return $this->markdown('site.mail.show', [
            'data' => $this->data
        ]);

    }
}
