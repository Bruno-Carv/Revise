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
    public function getEmail(){
        return $this->Email;
    }

    /**
     * Settes da Email do 
     * Usuario
     * 
     * @param String $Email
     * @return Void
     */
    public function setEmail($Email){
        $this->Email = $Email;
    }
    
    /**
     * Gettes da Senha do 
     * Usuario
     * 
     * @return String $Senha
     */
    public function getSenha(){
        return $this->Senha;
    }
    
    /**
     * Settes da Senha do 
     * Usuario
     * 
     * @param String $Senha
     * @return Void
     */
    public function setSenha($Senha){
        $this->Senha = $Senha;
    }
    

    //Metodos CRUD

    /**
     * Create do Usuario
     */
    public function cre_Usuario(){
        
    }

    /**
     * Read do Usuario 
     */
    public function rea_Usuario(){

    }

    /**
     * Upgrade do Usuario
     */
    public function upd_Usuario(){

    }

    /**
     * Delete do usuario
     */
    public function del_Usuario(){

    }

    //Metodos de plano de negocio 

}
