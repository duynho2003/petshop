<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticateController extends Controller
{
    public function login() 
    {
        return view('fe.auth.login');
    }

    public function register() {
        return view('fe.auth.register');
    }

    public function forgot() 
    {
        return view("fe.auth.forgot");
    }

    public function logout()
    {
        \Sentinel::logout();
        return redirect('/login');
    }
}
