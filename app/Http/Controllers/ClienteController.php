<?php

namespace App\Http\Controllers;
use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
    public function index()
    {

    }

    public function show()
    {
        return view('cadastro-cliente');
    }

    public function create(Request $req)
    {
        if (Auth::check() === true) {
            $dados = $req->all();

            $dados['cpf/cnpj'] = preg_replace('/[^0-9]/', '', $dados['cpf/cnpj']);

            $cont = $dados['cpf/cnpj'];

            //0 == empresa e 1 == pessoa
            if(strlen($cont) == 11){
                $dados['type'] = 1;
            } else {
                $dados['type'] = 0;
            }

            $dados['users_id'] = Auth::user()->id;

            Cliente::create($dados);

            return redirect()->route('dashboard');

            return response()->json([
                'message' => 'Cadastrado com sucesso',
                'create' => true,
            ]);

        }

        return redirect()->route('home');
    }

}
