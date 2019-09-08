<?php

namespace App\Http\Controllers;

use App\modelFisico;
use Illuminate\Http\Request;

class controllerFisico extends Controller
{
    public function Cadastro(Request $request)
    { }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function PaginaCadastro()
    {
        return view('Fisico.perfil.create');
    }
}
