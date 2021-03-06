<?php

namespace App\Http\Controllers;

use App\modelCheck;
use App\modelFisico;
use App\modelUsuario;
use App\modelVeiculo;
use App\modelJuridico;
use App\modelPlano;
use Illuminate\Http\Request;

class controllerFisico extends Controller
{

    public function Cadastro(Request $request, controllerUsuario $controllerUsuario, modelFisico $modelFisico)
    {
        $campos = $controllerUsuario->ValidarCampos($request);
        if ($campos) {
            $cadastro = $modelFisico->CadastrarUsuarioFisico($controllerUsuario->TratamentoLogin($request->txtcpf), $request);
        } else {
            $cadastro = json_encode(['Status' => false, 'Mensagem' => 'Preencha corretamente os campos!']);
        }
        $cadastro = json_decode($cadastro);
        return redirect()->back()->with('Cadastro', $cadastro);
    }

    public function Login($CPF,$SENHA){
        $modelFisico = new modelFisico();
        $usuario = $modelFisico->Login($CPF,$SENHA);
        if($usuario != false){
            session(['Fisico' => $modelFisico]);
            return redirect('/Home');
        }
        else{
            unset($modelFisico);
            $Login = json_encode(['Status' => false, 'Mensagem' => 'Usuário não encontrado']);
        }
        $Login = json_decode($Login);
        return redirect()->back()->with('Login', $Login);
    }

    public function Index(controllerUsuario $controllerUsuario, modelCheck $modelCheck){
        $modelFisico = session()->get('Fisico');
        $Notificacao = $modelCheck->listaNotificacoes($modelFisico->getIdUsuario());
        $Notificacao = json_decode($Notificacao);
        $Andamento = $modelCheck->listaPecasVerificados($modelFisico->getIdUsuario());
        $Andamento = json_decode($Andamento);
        $Veiculos = $controllerUsuario->ListaVeiculosDoUsuario($modelFisico);
        $Veiculos = json_decode($Veiculos);
        return view('Fisico\Inicio',['Fisico' => $modelFisico, 'Notificacoes' => $Notificacao, 'Veiculos' => $Veiculos, 'Andamentos' => $Andamento]);
    }


    // Perfil -----------------------------------------------------------------
    public function LerPerfil(modelPlano $modelPlano){
        $modelFisico = session()->get('Fisico');
        $perfil = $modelFisico->DadosPerfil();
        $perfil = json_decode($perfil);
        $mensalidade = $modelPlano->listaMensalidadeFisico($modelFisico->getIdFisico());
        $mensalidade = json_decode($mensalidade);
        return view('Fisico\Perfil',['Fisico' => $modelFisico, 'Perfil' => $perfil, 'Mensalidades' => $mensalidade]);
    }

    public function AlterarPerfil(Request $request, modelFisico $modelFisico, modelPlano $modelPlano){
        $modelFisico = session()->get('Fisico');
        if($modelFisico->atualizarPerfil($request, $modelFisico->getIdFisico(), $modelFisico->getIdUsuario())){
            $atualizacao = json_encode(['Status'=>true, 'Mensagem'=>'']);
        }else{
            $atualizacao = json_encode(['Status'=>false, 'Mensagem'=>'']);
        }
        $atualizacao = json_decode($atualizacao);
        return redirect()->back()->with('Atualizacao', $atualizacao);
    }

    public function DeletarPerfil(){
        $modelFisico = session()->get('Fisico');
        if($modelFisico->DeletarPerfil($modelFisico->getIdFisico(), $modelFisico->getIdUsuario())){
            $atualizacao = json_encode(['Status'=>true, 'Mensagem'=>'Deletado com sucesso']);
        }
        else{
            $atualizacao = json_encode(['Status'=>false, 'Mensagem'=>'Erro ao deletar']);
        }
        $atualizacao = json_decode($atualizacao);
        unset($modelFisico);
        session()->flush();
        return redirect('/SignIn')->with('Login',$atualizacao);
    }

}
