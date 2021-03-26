<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use PDF;
use App\Cliente;

class Mail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $clients = Cliente::where('id', 4)->get();
        $pdf = PDF::loadView('client-pdf', compact('clients'));
        return $this->subject('Teste envio de email')->view('email.TestMail')->attachData($pdf->output(), "recibo.pdf");
    }
}
