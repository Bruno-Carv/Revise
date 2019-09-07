<?php

namespace App\Http\Controllers;

use App\modelFisico;
use App\modelJuridico;
use Illuminate\Http\Request;

class controllerUsuario extends Controller
{
    public function Acesso(Request $request){
        $login = $this->Tratamento($request->cpfcnpj);
        $senha = $request->senha;
        switch (strlen($login)) {
            case '11':
                $user = new modelFisico;
                $user->AcessoFisico($login,$senha);
                break;
            case '14':
                $user = new modelJuridico;
                $user->AcessoJuridico($login,$senha);
                break;
            default:
                return ('Preencha os campos corretamente');
                break;
        }

    }

    private function Tratamento($login){
        return preg_replace('/[^0-9]/', '', $login);
    }
}
