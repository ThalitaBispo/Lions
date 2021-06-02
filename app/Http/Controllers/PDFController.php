<?php

namespace App\Http\Controllers;
use App\User;
use App\Cliente;
use Illuminate\Support\Facades\DB;
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

        foreach ($clients as $cli) {
            $date = explode('-', $cli->date);
            $date[1] = date('m');
            $cli->date = implode([$date[0], '/', $date[1], '/', $date[2]]);
        }

        $pdf = PDF::loadView('client-pdf', compact('clients'));
        return $pdf->setPaper('a4')->stream('recibo.pdf');
        return $pdf->download('recibo.pdf');
    }

    public function proposta($id){

        $cliente = Cliente::where('id', $id)->get();
        $pdf = PDF::loadView('proposta-pdf', compact('cliente'));
        return $pdf->setPaper('a4')->stream('propostadeservico.pdf');
        return $pdf->dorwload('propostadeservico.pdf');
    }

    public function cashier(){
        $cashier = Cliente::all();
        $total = DB::table('clientes')->select('value')->where('deleted_at', null)->get();
        $total_value = $total->sum('value');
        $pdf = PDF::loadView('cashier-pdf', compact('cashier', 'total_value'));
        return $pdf->setPaper('a4')->stream('cashier.pdf');
        return $pdf->download('cashier.pdf');
    }

    public function whatsapp($id){
        $clients = Cliente::where('id', $id)->get();

        foreach ($clients as $cli) {
            $date = explode('-', $cli->date);
            $date[1] = date('m');
            $cli->date = implode([$date[0], '/', $date[1], '/', $date[2]]);
        }

        $pdf = PDF::loadView('client-pdf', compact('clients'));
        return redirect('https://api.whatsapp.com/send?text=Link do recibo:http://127.0.0.1:8000/download');
        //return //return redirect('https://api.whatsapp.com/send?text=Link do recibo: http://lionsmonitoramento/download' . $id);
    }
}
