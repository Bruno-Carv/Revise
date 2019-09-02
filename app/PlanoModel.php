<?php

namespace App;

use Illuminate\Database\Eloquent\UsuarioModel;

class PlanoModel extends UsuarioModel
{
    //Atributos
    private $Nome;
    private $Valor;
    private $Descricao;
    Private $Veiculos;


    /**
     * Gettes e Settes 
     */

    /**
     * Gettes do nome do plano 
     * 
     * @return String $Nome
     */
    public function getNomePlano(){
        return $this->Nome;
    }

    /**
     * Settes do nome do plano
     * 
     * @param String $Nome
     * @return Void
     */
    public function setNomePlano($Nome){
        $this->Nome = $Nome;
    }

    /**
     * Gettes do Valor do plano
     * 
     * @return Double 
     */
    public function getValorPlano(){

    }
}
