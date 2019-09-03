<?php

namespace App;

use Illuminate\Database\Eloquent\UsuarioModel;


/**
 * Model do Veículo 
 * 
 * Herança do usuario 
 * 
 * Diretorio pai - /app/Http
 */
class VeiculoModel extends UsuarioModel
{
    //Atributos 
    private $placa;
    private $cor;

    //Metodos 

    /**
     * Gettes da placa do veiculo 
     * 
     * @return String $placa;
     */
    public function getPlaca(){
        return $this->placa;
    }

    /**
     * Settes da placa do veiculo
     * 
     * @param String $placa;
     * @return Void
     */
    public function setPlaca($placa){
        $this->placa = $placa;
    }

    /**
     * Gettes da cor do veiculo
     * 
     * @return String $cor
     */
    public function getCor(){
        return $this->cor;
    }

    /**
     * Settes da cor do veiculo
     * 
     * @param String $cor;
     * @return Void
     */
    public function setCor($cor){
        $this->cor = $cor;
    }


    //Métodos CRUD

    /**
     * Create do veículo
     */
    public function cre_Veiculo(){

    }

    /**
     * Reade do veículo
     */
    public function rea_Veiculo(){

    }

    /**
     * Upgrade do veículo
     */
    public function upd_Veiculo(){

    }

    /**
     * Delete do veiculo
     */
    public function del_Veiculo(){

    }

    //Metodos de plano de negocio 

}
