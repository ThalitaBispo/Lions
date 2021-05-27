<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

        //if (Auth::check() === true) {
            $dados = $req->all();

            if($dados['administrator'] == 'Sim'){
                $dados['administrator'] = 1;
            } else {
                $dados['administrator'] = 0;
            }

            $dados['password'] = bcrypt($dados['password']);

            //Remover o confirmPassowrd pq ele não vai por banco de dados
            unset($dados['confirmPassowrd']);

            User::create($dados);

            return redirect()->route('user');

            return response()->json([
                'message' => 'Cadastrado com sucesso',
                'create' => true,
            ]);

        //}

        //return redirect()->route('home');

    }

    public function show($id)
    {
        if (Auth::check() === true) {
            $registro = User::findOrFail($id);

            if(!$this->authorize('notDeletADM', $registro)) {
                return response([], 403);
            }

            return view('user-view', compact('registro'));
        }

        return redirect()->route('home');
    }

    public function update(Request $request, $id)
    {
        if (Auth::check() === true) {
            $user = User::findOrFail($id);

            $data = $request->all();

            if($data['administrator'] == 'Sim'){
                $data['administrator'] = 1;
            } else {
                $data['administrator'] = 0;
            }

            $oldsenha = $data['password'];

            $data['password'] = $user['password'];

            $user->update($data);

            //dd($user['password'], $data['password']);

            if ( ! $data['password'] == '') // verifica se a senha foi alterada
            {
                if(Hash::check($oldsenha, $user['password'])) {
                    $user->password = bcrypt($data['newPass']); // muda a senha do seu usuario já criptografada pela função bcrypt
                } else {
                    return redirect()->back()->with('mensagem', 'Senha Atual inválida');
                }
            }

           $user->save($data);

            //dd($user['password'], $data['password'], 'Esse');

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
