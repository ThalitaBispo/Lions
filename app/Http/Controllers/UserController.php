<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {

        if (Auth::check() === true) {
            $registros = User::all();

            $registros = User::all();
            return view('users', compact('registros'));
        }

        return redirect()->route('home');
    }

    public function create(Request $req)
    {

        if (Auth::check() === true) {
            $dados = $req->all();

            $dados['password'] = bcrypt($dados['password']);

            //Remover o confirmPassowrd pq ele não vai por banco de dados
            unset($dados['confirmPassowrd']);

            User::create($dados);

            return redirect()->route('user');

            return response()->json([
                'message' => 'Cadastrado com sucesso',
                'create' => true,
            ]);

        }

        return redirect()->route('home');

    }

    public function show($id)
    {
        if (Auth::check() === true) {
            $user = User::findOrFail($id);
            echo ($user);
        }

        return redirect()->route('home');
    }

    public function update(Request $request, $id)
    {
        if (Auth::check() === true) {
            $user = User::findOrFail($id);

            $data = $request->all();

            //Aqui caso precise de ajuda para atualizar a senha do usuário me avise

            //$data['password'] = $user['password'];

            $user->update($data);

            if ( ! $data['password'] == '') // verifica se a senha foi alterada
            {
                $user->password = bcrypt($data['password']); // muda a senha do seu usuario já criptografada pela função bcrypt
            }

            $user->save($data);

            if ($user) {

                return redirect()->route('user')->with('success', 'Sucesso ao alterar usuário');
            }

            return redirect()->back()->with('error', 'Erro ao alterar Usuário');
        }

        return redirect()->route('home');
    }

    public function destroy($id)
    {
        if (Auth::check() === true) {
            $user = User::find($id);
            $user->delete();

            if ($user) {
                return redirect()->route('user')->with('success', 'Excluido com sucesso!');
            }
            return redirect()->back()->with('error', 'Erro ao excluir usuário');
        }

        return redirect()->route('home');

    }
}
