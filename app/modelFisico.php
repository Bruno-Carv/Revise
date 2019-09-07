<?php

namespace App;

class modelFisico extends modelUsuario
{
    
    private $Nome;
    private $Email;
    private $CPF;
    

    public function AcessoFisico($cpf,$senha){
        $resultado = DB::select('select f.cd_cpf, u.cd_senha 
        from tb_usuario as u 
            inner join tb_usuario_fisico as f on f.cd_usuario = u.cd_usuario 
                and f.cd_cpf = :cpf and u.cd_senha = :senha', ['cpf' => $cpf, 'senha' => $senha]);
        return $resultado;
    }

    public function TratamentoCPF(){
        
    }

    public function CriandoFisico(){

    }

    public function LendoFisico(){

    }

    public function AlterandoFisico(){

    }

    public function DeletandoFisico($id){

    }
 
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
