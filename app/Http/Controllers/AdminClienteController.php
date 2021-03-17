<?php

namespace App\Http\Controllers;

use App\Cliente;

class AdminClienteController extends Controller
{

    public function createCliente()
    {
        return view('cadastro-cliente');
    }

    public function updateCliente($id)
    {
        $clientes = Cliente::findOrFail($id);
        return view('edita-cliente', compact('clientes'));

    }

}
