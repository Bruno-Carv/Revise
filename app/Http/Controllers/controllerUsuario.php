<?php

namespace App\Http\Controllers;

use App\modelFisico;
use App\modelJuridico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Alert;

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

        if (!(isset(Auth::user()->id))) {

            $login = $this->Tratamento($request->cpfcnpj);

            $senha = $request->senha;

            switch (strlen($login)) {

                case '11':

                    $user = new modelFisico;

                    $dados = $user->AcessoFisico($login, $senha);

                    if ($dados != false) {
                        Auth::user()->id = '1';
                        Auth::login($user);
                        return view('Fisico/home', $dados);
                    } else {
                        Alert::info('Email was sent!');
                        return back();
                    }
                    break;

                case '14':

                    $user = new modelJuridico;

                    $dados = $user->AcessoJuridico($login, $senha);

                    if ($dados != false) {
                        Auth::user()->id = '2';
                        Auth::login($user);
                        return view('Juridico/home');
                    } else {
                        Alert::info('Email was sent!');
                        return back();
                    }
                    break;

                default:
                    Alert::info('Email was sent!');
                    return back();
                    break;
            }
        } else {

            if ($request->manterContectado == true) {
                switch (Auth::user()->id) {

                    case '1':
                        return view('Fisico/home');
                        break;

                    case '2':
                        return view('Juridico/home');
                        break;

                    default:
                        return back();
                        break;
                }
            } else {
                return back();
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
