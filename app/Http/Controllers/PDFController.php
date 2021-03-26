<?php

namespace App\Http\Controllers;
use App\User;
use App\Cliente;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function user(){

        $users = User::all();
        $pdf = PDF::loadView('user-pdf', compact('users'));
        return $pdf->setPaper('a4')->stream('users.pdf');
        return $pdf->download('users.pdf');
    }

    public function client($id){

        $clients = Cliente::where('id', $id)->get();
        $pdf = PDF::loadView('client-pdf', compact('clients'));
        return $pdf->setPaper('a4')->stream('clients.pdf');
        return $pdf->download('clientes.pdf');
    }

    public function proposta($id){

        $cliente = Cliente::where('id', $id)->get();
        $pdf = PDF::loadView('proposta-pdf', compact('cliente'));
        return $pdf->setPaper('a4')->stream('propostadeservico.pdf');
        return $pdf->dorwload('propostadeservico.pdf');
    }
}
