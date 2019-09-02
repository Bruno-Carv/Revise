<?php

namespace App;

use Illuminate\Database\Eloquent\UsuarioModel;


/**
 * Model Usuario Juridico 
 * Herdado da classe Usuario 
 * 
 * 
 * Diretorio Pai - /app/Http
 */
class UsuarioJuridicoModel extends UsuarioModel
{
    //Atributos
    private $CNPJ;
    private $NomeFantasia;
    private $RazaoSocial;
    
    //Gettes e Settes

    /**
     * Gettes do CNPJ do 
     * usuario juridico
     * 
     * @return String $CNPJ
     */
    public function getCnpj(){
        return $this->CNPJ;
    }

    /**
     * Settes do CNPJ do 
     * usuario juridico
     * 
     * @param String $CNPJ
     * @return Void
     */
    public function setCnpj($CNPJ){
        $this->CNPJ = $CNPJ;
    }

    /**
     * Gettes do NomeFantasia do 
     * usuario juridico
     * 
     * @return String $NomeFantasia
     */
    public function getNomeFantasia(){
        return $this->NomeFantasia;
    }

    /**
     * Settes do NomeFantasia do 
     * usuario juridico
     * 
     * @param String $NomeFantasia
     * @return Void
     */
    public function setNomeFantasia($NomeFantasia){
        $this->NomeFantasia = $NomeFantasia;
    }

    /**
     * Gettes do RazaoSocial do 
     * usuario juridico
     * 
     * @return String $RazaoSocial
     */
    public function getRazaoSocial(){
        return $this->RazaoSocial;
    }

    /**
     * Settes do RazaoSocial do 
     * usuario juridico
     * 
     * @param String $RazaoSocial
     * @return Void
     */
    public function setRazaoSocial($RazaoSocial){
        $this->RazaoSocial = $RazaoSocial;
    }

    //Métodos CRUD

    /**
     * Create do usuario juridico
     */
    public function cre_Juridico(){

    }

    /**
     * Read do usuario juridico
     */
    public function rea_Juridico(){

    }

    /**
     * Upgrade do usuario juridico
     */
    public function upd_Juridico(){

    }

    /**
     * Delete do usuario juridico
     */
    public function del_Juridico(){

    }

    //Metodos de plano de negocio 

}
