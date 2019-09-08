<?php

namespace App\Http\Controllers;

use App\modelJuridico;
use Illuminate\Http\Request;

class controllerJuridico extends Controller
{
    

    public function create()
    {
        return view('cadastro.juridico');
    }

    public function Cadastro(Request $request){
        
    }
}
