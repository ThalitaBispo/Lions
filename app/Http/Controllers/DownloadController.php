<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function show($id) {
        $download = Cliente::findOrFail($id);
        return view('download', compact('download'));
    }
}
