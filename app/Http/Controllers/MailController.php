<?php

namespace App\Http\Controllers;
use App\Mail\Mail;
use App\Cliente;
use Illuminate\Support\Facades\Mail as FacadesMail;
use App\Mail\MailPropos;
use Illuminate\Support\Facades\Mail as FacadesMailP;

class MailController extends Controller
{
    public function sendEmail($id)
    {

        $cliente = Cliente::findOrFail($id);
        FacadesMail::to($cliente['email'])->send(new Mail($id));
        return 'Email send';
    }

    public function sendEmailPropos($id)
    {
        $cliente = Cliente::findOrFail($id);
        FacadesMailP::to($cliente['email'])->send(new MailPropos($id));
        return 'Email send';
    }

}
