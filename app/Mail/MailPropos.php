<?php

namespace App\Mail;
use App\Cliente;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use PDF;

class MailPropos extends Mailable
{
    use Queueable, SerializesModels;

    public $id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $id = $this->id;
        $cliente = Cliente::where('id', $id)->get();
        $pdf = PDF::loadView('proposta-pdf', compact('cliente'));
        return $this->subject('Teste envio de email')
            ->view('email.TestMail')
            ->attachData($pdf->output(), "propostadeservico.pdf");
    }
}
