<?php

namespace App\Http\Controllers;
use App\Cliente;
use App\Mail\ForgotPMail;
use Illuminate\Support\Facades\Mail as FacadesForgotP;
use App\Mail\Mail;
use Illuminate\Support\Facades\Mail as FacadesMail;
use App\Mail\MailPropos;
use Illuminate\Http\Request;
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

    public function forgotPassword(Request $req) {

        $email = $req->all();

        $details = [
            'title' => 'Recuperação de senha',
            'body' => 'Clique no link para recuperar a senha'
        ];

        FacadesForgotP::to($email['email'])->send(new ForgotPMail($details));
        return redirect()->route('forgot')->with('mensagem', 'Email enviado com sucesso!');
    }

}
