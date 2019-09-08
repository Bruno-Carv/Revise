<?php

namespace App\Http\Controllers;

use App\modelJuridico;
use Illuminate\Http\Request;

class controllerJuridico extends Controller
{
    

    /**
     * Undocumented function
     *
     * @return void
     */
    public function PaginaCadastro()
    {
        return view('Juridico.perfil.create');
    }

    public function Cadastro(Request $request){
        
    }
}
