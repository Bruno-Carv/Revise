<?php

namespace App\Http\Controllers;

use App\modelFisico;
use App\modelJuridico;
use Illuminate\Http\Request;

class controllerUsuario extends Controller
{

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function Acesso(Request $request)
    {
        session_start();

        if (!(isset($_SESSION['user']) || empty($_SESSION['user']))) {

            $login = $this->Tratamento($request->cpfcnpj);

            $senha = $request->senha;

            switch (strlen($login)) {

                case '11':

                    $user = new modelFisico;

                    $dados = $user->AcessoFisico($login, $senha);

                    if ($dados != false) {
                        $_SESSION['user'] = '1';
                        return view('Fisico/home', $dados);
                    } else
                        return view('login', false);
                    break;

                case '14':

                    $user = new modelJuridico;

                    $dados = $user->AcessoJuridico($login, $senha);

                    if ($dados != false) {
                        $_SESSION['user'] = '2';
                        return view('Juridico/home');
                    } else
                        return view('login', false);
                    break;

                default:
                    return ('Preencha os campos corretamente');
                    break;
            }
        } else {

            switch ($_SESSION['user']) {

                case '1':
                    return view('Fisico/home');
                    break;

                case '2':
                    return view('Juridico/home');
                    break;

                default:
                    return view('login');
                    break;
            }
        }
    }

    /**
     * Undocumented function
     *
     * @param [type] $login
     * @return void
     */
    private function Tratamento($login)
    {
        return preg_replace('/[^0-9]/', '', $login);
    }
}
