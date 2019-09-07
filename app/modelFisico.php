<?php

namespace App;

use DB;

class modelFisico extends modelUsuario
{

    private $Nome;
    private $Email;
    private $CPF;


    public function AcessoFisico($cpf, $senha)
    {

        $resultado = DB::select('select u.cd_usuario as "ID", f.cd_cpf as "CPF", u.cd_senha as "SENHA", u.nm_email as "EMAIL", f.nm_usuario_fisico as "NOME"
                    from tb_usuario as u 
                        inner join tb_usuario_fisico as f on f.cd_usuario = u.cd_usuario 
                            and f.cd_cpf = ? and u.cd_senha = ?', [$cpf, $senha]);

        $resultado = $resultado->fetchAll();
        
        //https://pt.stackoverflow.com/questions/187488/personalizando-uma-model-de-usuarios-laravel-5-4-problema-no-login
        
        if ($resultado['CPF'] == $cpf && $resultado["SENHA"] == $senha) {

            $this->setId($resultado['ID']);
            $this->setSenha($resultado['SENHA']);
            $this->setCPF($resultado['CPF']);
            $this->setNome($resultado['NOME']);
            $this->setEmail($resultado['EMAIL']);

            return true;
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
