<?php

namespace App;

use DB;
use Psy\Util\Json;

class modelFisico extends modelUsuario
{

    private $Nome;
    private $Email;
    private $CPF;


    public function AcessoFisico($cpf, $senha)
    {
        $usuario = DB::table('tb_usuario')
        ->join('tb_usuario_fisico','tb_usuario_fisico.cd_usuario','=','tb_usuario.cd_usuario')
        ->where('tb_usuario_fisico.cd_cpf','=',$cpf,'and','tb_usuario.cd_senha','=',$senha)
        ->select('tb_usuario.cd_usuario as ID','tb_usuario_fisico.cd_cpf as CPF','tb_usuario.cd_senha as SENHA', 
                 'tb_usuario.nm_email as EMAIL', 'tb_usuario_fisico.nm_usuario_fisico as NOME')
        ->get();
        
        if ($usuario != '[]') {
            return $usuario;
        } else {
            return false;
        }

    }

    public function CriandoFisico()
    { }

    public function LendoFisico()
    { }

    public function AlterandoFisico()
    { }

    public function DeletandoFisico($id)
    { }

    public function getNome()
    {
        return $this->Nome;
    }

    public function setNome($Nome)
    {
        $this->Nome = $Nome;

        return $this;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    public function getCPF()
    {
        return $this->CPF;
    }

    public function setCPF($CPF)
    {
        $this->CPF = $CPF;

        return $this;
    }
}
