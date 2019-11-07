<?php

namespace App\Http\Controllers;

use App\modelPlano;
use App\modelVeiculo;
use Illuminate\Http\Request;

class controllerVeiculo extends Controller
{



    public function LerVeiculo(){

    }

    public function DetalhesVeiculo(Request $request,modelVeiculo $modelVeiculo, $usuario, controllerUsuario $controllerUsuario){
        $modelFisico = session()->get('Fisico');
        $Veiculos = $controllerUsuario->ListaVeiculosDoUsuario($modelFisico);
        $Veiculos = json_decode($Veiculos);
        $Veiculo = $modelVeiculo->DetalhesDoVeiculo($request->placa);
        $Veiculo = json_decode($Veiculo);
        return view('Fisico\Veiculo',['Fisico' => $modelFisico, 'Veiculos' => $Veiculos, 'Dados' => $Veiculo]);
    }

    public function AdicionarVeiculo(Request $request,modelVeiculo $modelVeiculo, $usuario){
        $Placa = (strtoupper($request->txtplaca));//Deixa maiusculo
        $veiculo = (explode("/",$request->txtMarca));//Separar Marca e Modelo
        $modelVeiculo = new modelVeiculo();
        $modelVeiculo->setAno($request->txtAno);
        $modelVeiculo->setCor($request->txtCor);
        $modelVeiculo->setMarca($veiculo[0]);
        $modelVeiculo->setPlaca($Placa);
        $modelVeiculo->setModelo($veiculo[1]);
        $modelVeiculo->setEstado($request->txtEstado);
        $modelVeiculo->setCidade($request->txtCidade);
        $modelVeiculo->setQuilometragem($request->txtQuilometragem);
        $id = $usuario->getIdUsuario();
        return $modelVeiculo->Cadastrar($id);
    }

    public function AlterarVeiculo(){

    }

    public function DeletarVeiculo(){

    }

    public function InserirQuilometragem(Request $request, modelVeiculo $modelVeiculo){
        $result = $modelVeiculo->SistemaVerificacaoVeiculo($request->Placa,$request->KM);
        return redirect()->back();
    }

    public function compartibilidadeVeiculo($veiculo, modelVeiculo $modelVeiculo){
        return ($modelVeiculo->compartibilidadeVeiculo($veiculo));
    }

    public function verificarVeiculo(Request $request, modelVeiculo $modelVeiculo){
        $modelVeiculo->verificarVeiculo($request);
    }

    public function quantidadeVeiculoPorPlano($modelUsuario, modelVeiculo $modelVeiculo, modelPlano $modelPlano){
        $quantidade = $modelVeiculo->QuantidadeVeiculosConta($modelUsuario->getIdUsuario());
        $maximo = $modelPlano->MaximoVeiculosDoPlano($modelUsuario->getIdFisico());

        $valor = $maximo - $quantidade;

        if($valor > 0){
            return true;
        }
        else{
            return false;
        }
    }
}
