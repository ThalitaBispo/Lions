<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecoveryController extends Controller
{
    public function update(Request $request) {
        $user = DB::table('users')->where('email', $request->email)
            ->update(['password' => bcrypt($request->password)]);
            return redirect()->route('recovery')->with('mensagem', 'Senha alterada com sucesso');

    }
}
