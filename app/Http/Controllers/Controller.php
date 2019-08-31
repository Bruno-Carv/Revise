<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;




    public function Home(){
        return view('welcome');
    }

    public function sobre(){
        return view('welcome');
    }

    public function aplicativo(){
        return view('aplicativo');
    }

    public function planos(){
        return view('planos');
    }
}
