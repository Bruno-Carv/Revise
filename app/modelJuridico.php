<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelJuridico extends Model
{
    public function AcessoJuridico($CNPJ, $Senha){
        return DB::statement('select * from tb_usuario_juridico where active = ?', [1]);
    }
}