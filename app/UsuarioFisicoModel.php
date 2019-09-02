<?php

namespace App;

use Illuminate\Database\Eloquent\UsuarioModel;


/**
 * Model Usuario Fisico 
 * Herdado da classe Usuario 
 * 
 * 
 * Diretorio Pai - /app/Http
 */
class UsuarioFisicoModel extends UsuarioModel
{
    //Atributos
    private $Nome;
    private $CPF;
    private $Nascimento;


    //Gettes e Settes 

    /**
     * Gettes do Nome do 
     * usuario físico
     * 
     * @return String $Nome
     */
    public function getNome(){
        return $this->Nome;
    } 

    /**
     * Settes do Nome do 
     * usuario fisico
     * 
     * @param String $Name 
     * @return void
     */
    public function setNome($Nome){
        $this->Nome = $Nome;
    }

    /**
     * Gettes do CPF do 
     * usuario fisico
     * 
     * @return String $CPF
     */
    public function getCPF(){
        return $this->CPF;
    }

    /**
     * Settes do CPF do 
     * usuario fisico
     * 
     * @param String $CPF 
     * @return void
     */
    public function setCPF($CPF){
        $this->CPF = $CPF;
    }

    /**
     * Gettes do Nascimento do 
     * usuario fisico
     * 
     * @return short $Nascimento
     */
    public function getNascimento(){
        return $this->Nascimento;
    }

    /**
     * Settes do Nascimento do 
     * usuario fisico
     * 
     * @param short $Nascimento 
     * @return void
     */
    public function setNascimento($Nascimento){
        $this->Nascimento = $Nascimento;
    }


    //Métodos CRUD
    
    /**
     * Create do usuario físico
     */
    public function cre_Fisico(){

    }

    /**
     * Read do usuario físico
     */
    public function rea_Fisico(){

    }

    /**
     * Upgrade do usuario físico
     */
    public function upd_Fisico(){

    }

    /**
     * Delete do usuario físico
     */
    public function del_Fisico(){

    }
}
