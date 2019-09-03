<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Alert;

use App\UsuarioFisicoModel;

use App\UsuarioJuridicoModel;

class UsuarioController extends Controller
{

    public function SignIn($user)
    {
        
    }

    public function TratamentoLogin($login){

    }

    public function Criptrografia($dados){
        $dados = md5($dados);
        $dados = sha1($dados);
        $dados = base64_encode($dados);
        return $dados;
    }
}
