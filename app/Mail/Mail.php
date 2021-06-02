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
        $clients = Cliente::where('id', $id)->get();

        foreach ($clients as $cli) {
            $date = explode('-', $cli->date);
            $date[1] = date('m');
            $cli->date = implode([$date[0], '/', $date[1], '/', $date[2]]);
        }

        $pdf = PDF::loadView('client-pdf', compact('clients'));

        return $this->subject('Recibo - Grupo Lions')
            ->view('email.TestMail')
            ->attachData($pdf->output(), "recibo.pdf");
    }
}
