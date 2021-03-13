<?php

namespace App\Http\Controllers;

use App\User;

class AdminController extends Controller
{

    public function home()
    {
        return view('welcome');
    }
    public function createUser()
    {
        return view('cadastro-users');
    }

    public function updateUser($id)
    {
        $registro = User::findOrFail($id);
        return view('edita-user', compact('registro'));

    }

}
