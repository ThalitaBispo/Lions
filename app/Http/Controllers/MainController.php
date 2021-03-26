<?php

namespace App\Http\Controllers;

use App\Mail\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;

class MainController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => 'Email de teste',
            'body' => 'Email enviado'
        ];

        FacadesMail::to('thalitabispo.dev@gmail.com')->send(new Mail($details));
        return 'Email send';
    }
}
