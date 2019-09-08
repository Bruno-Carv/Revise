<?php

namespace App\Http\controllerUsuario;

use Illuminate\Http\Request;

class SessionController implements controllerUsuario
{
    
    public function accessSessionData(Request $request)
    {
        if ($request->session()->has('key'))
            echo $request->session()->get('key');
        else
            echo 'No data in the session';
    }
    
    public function storeSessionData(Request $request)
    {
        $request->session()->put('my_name', 'Virat Gandhi');
        echo "Data has been added to session";
    }
    
    public function deleteSessionData(Request $request)
    {
        $request->session()->forget('my_name');
        echo "Data has been removed from session.";
    }
}
