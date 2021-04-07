<?php

namespace App\Http\Controllers;
use App\Cliente;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
    public function index()
    {
        //
    }

    public function show()
    {
        //
    }

    public function create(Request $req)
    {
        if (Auth::check() === true) {
            $dados = $req->all();

            $dados['cpf_cnpj'] = $dados['cpf/cnpj'];

            $cont = $dados['cpf/cnpj'];

            //0 == empresa e 1 == pessoa
            if(strlen($cont) <= 14){
                $dados['type'] = 1;
            } else {
                $dados['type'] = 0;
            }

            $date = explode('/', $dados['date']);
            $dados['day'] = $date[0];
            $dados['date'] = implode([$date[2], '/', $date[1], '/', $date[0]]);

            $dados['newdate'] = date('Y-m-d');

            $dados['users_id'] = Auth::user()->id;

            Cliente::create($dados);

            return redirect()->route('dashboard');

            // return response()->json([
            //     'message' => 'Cadastrado com sucesso',
            //     'create' => true,
            // ]);

        }

        return redirect()->route('home');
    }

    public function update(Request $req, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $dados = $req->all();

        $dados['cpf_cnpj'] = $dados['cpf/cnpj'];

        $cont = $dados['cpf/cnpj'];

        //0 == empresa e 1 == pessoa
        if(strlen($cont) <= 14){
            $dados['type'] = 1;
        } else {
            $dados['type'] = 0;
        }

        $date = explode('/', $dados['date']);
        $dados['date'] = implode([$date[2], '/', $date[1], '/', $date[0]]);

        $cliente->update($dados);

        if ($cliente) {

            return redirect()->route('dashboard')->with('success', 'Sucesso ao alterar o cliente');

        }

        return redirect()->back()->with('error', 'Erro ao alterar Cliente');
    }

    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();

        if ($cliente) {
            return redirect()->route('dashboard')->with('success', 'Excluido com sucesso!');
        }
        return redirect()->back()->with('error', 'Erro ao excluir usuário');
    }

}
