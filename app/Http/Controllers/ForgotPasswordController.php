<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function index() {
        return view('recovery-password');
    }

    public function show() {
        return view('forgot-password');
    }
}
