<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelJuridico extends Model
{
    public function AcessoJuridico($CNPJ, $Senha){
        
        $Empresa = DB::table('tb_usuario')
            ->join('tb_usuario_juridico','tb_usuario_juridico.cd_usuario','=','tb_usuario.cd_usuario')
            ->where('tb_usuario_juridico.cd_cnpj','=',$CNPJ,'and','tb_usuario.cd_senha','=',$Senha)
            ->select('tb_usuario.*','tb_usuario_juridico.*')
            ->get();
        

        return $Empresa;
        /*
        if ($usuario != '[]') {

            return $usuario;
        
        } else {
        
            return false;
        
        }

        */
    }
}