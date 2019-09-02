<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Alert;

class UsuarioController extends Controller
{
    //
    public function cadastro(){
        return Alert::message('Message', 'Optional Title')->html()->persistent("No, thanks");
        return view('welcome');
    }

    public function SignIn(){
        return view('login');
    }
}
