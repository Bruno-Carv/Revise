<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function cadastro(){
        return view('cadastro');
    }
    public function SignIn(){
        return view('login');
    }
}
