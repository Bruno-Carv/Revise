<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelJuridico extends Model
{
    public function AcessoJuridico($CNPJ, $Senha){
        $user = DB::table('tb_usuario_juridico')->where('name', 'John')->first();

        echo $user->name;
    }
}