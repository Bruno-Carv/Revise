<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelUsuario extends Model
{
    //Atributos

    private $id;
    private $email;
    private $senha;


    /**
     * Gettes function
     *
     * @return void
     */
    protected function getId()
    {
        return $this->id;
    }

    /**
     * Settes do ID
     *
     * @param Int $id
     * @return void
     */
    protected function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gettes function
     *
     * @return void
     */
    protected function getEmail()
    {
        return $this->email;
    }

    /**
     * Settes do E-mail
     *
     * @param String $email
     * @return void
     */
    protected function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gettes da Senha
     *
     * @return void
     */ 
    protected function getSenha()
    {
        return $this->senha;
    }

    /**
     * Settes da senha
     *
     * @param String $senha
     * @return void
     */
    protected function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    
}
