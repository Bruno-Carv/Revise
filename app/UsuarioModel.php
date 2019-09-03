<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model Usuario 
 * 
 * Diretorio Pai - /app/Http
 * 
 */
class UsuarioModel extends Model
{
    //Atributos
    private $Email;
    private $Senha;


    //Gettes e Settes

    /**
     * Gettes do Email do 
     * Usuario
     * 
     * @return String $Email
     */
    protected function getEmail(){
        return $this->Email;
    }

    /**
     * Settes da Email do 
     * Usuario
     * 
     * @param String $Email
     * @return Void
     */
    protected function setEmail($Email){
        $this->Email = $Email;
    }
    
    /**
     * Gettes da Senha do 
     * Usuario
     * 
     * @return String $Senha
     */
    protected function getSenha(){
        return $this->Senha;
    }
    
    /**
     * Settes da Senha do 
     * Usuario
     * 
     * @param String $Senha
     * @return Void
     */
    protected function setSenha($Senha){
        $this->Senha = $Senha;
    }
    

    //Metodos CRUD

    /**
     * Create do Usuario
     */
    protected function cre_Usuario(){
        
    }

    /**
     * Read do Usuario 
     */
    protected function rea_Usuario(){

    }

    /**
     * Upgrade do Usuario
     */
    protected function upd_Usuario(){

    }

    /**
     * Delete do usuario
     */
    protected function del_Usuario(){

    }

    //Metodos de plano de negocio 

}
