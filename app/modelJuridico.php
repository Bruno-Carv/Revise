<?php

namespace App;

use App\modelUsuario;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class modelJuridico extends modelUsuario
{
    private $IdJuridico;
    private $NomeFantasia;
    private $RazaoSocial;
    private $CNPJ;

    /**
     * Get the value of IdJuridico
     */
    public function getIdJuridico()
    {
        return $this->IdJuridico;
    }

    /**
     * Set the value of IdJuridico
     *
     * @return  self
     */
    public function setIdJuridico($IdJuridico)
    {
        $this->IdJuridico = $IdJuridico;

        return $this;
    }

    /**
     * Get the value of NomeFantasia
     */
    public function getNomeFantasia()
    {
        return $this->NomeFantasia;
    }

    /**
     * Set the value of NomeFantasia
     *
     * @return  self
     */
    public function setNomeFantasia($NomeFantasia)
    {
        $this->NomeFantasia = $NomeFantasia;

        return $this;
    }

    /**
     * Get the value of RazaoSocial
     */
    public function getRazaoSocial()
    {
        return $this->RazaoSocial;
    }

    /**
     * Set the value of RazaoSocial
     *
     * @return  self
     */
    public function setRazaoSocial($RazaoSocial)
    {
        $this->RazaoSocial = $RazaoSocial;

        return $this;
    }

    /**
     * Get the value of CNPJ
     */
    public function getCNPJ()
    {
        return $this->CNPJ;
    }

    /**
     * Set the value of CNPJ
     *
     * @return  self
     */
    public function setCNPJ($CNPJ)
    {
        $this->CNPJ = $CNPJ;

        return $this;
    }


    public function Login($CNPJ, $SENHA)
    {

        $checkUser = DB::table('tb_usuario')
            ->join('tb_usuario_juridico', 'tb_usuario.cd_usuario', '=', 'tb_usuario_juridico.cd_usuario')
            ->select('tb_usuario_juridico.cd_usuario as Usuario', 'tb_usuario_juridico.cd_cnpj as CNPJ', 'tb_usuario.cd_senha as Senha', 'tb_usuario.nm_email as Email', 'tb_usuario_juridico.nm_nome_fantasia as Fantasia', 'tb_usuario_juridico.nm_razao_social as Razao')
            ->where('tb_usuario_juridico.cd_cnpj', '=', $CNPJ, 'and', 'tb_usuario.cd_senha', '=', $SENHA)
            ->exists();

        if ($checkUser) {
            $resultado = DB::table('tb_usuario')
                ->join('tb_usuario_juridico', 'tb_usuario.cd_usuario', '=', 'tb_usuario_juridico.cd_usuario')
                ->select('tb_usuario_juridico.cd_usuario as Usuario','tb_usuario_juridico.cd_usuario_juridico as Id' ,
                'tb_usuario_juridico.cd_cnpj as CNPJ', 'tb_usuario.cd_senha as Senha', 'tb_usuario.nm_email as Email',
                 'tb_usuario_juridico.nm_nome_fantasia as Fantasia', 'tb_usuario_juridico.nm_razao_social as Razao')
                ->where('tb_usuario_juridico.cd_cnpj', '=', $CNPJ, 'and', 'tb_usuario.cd_senha', '=', $SENHA)
                ->first();
            if ($resultado->CNPJ == $CNPJ && $resultado->Senha == $SENHA) {
                $this->setIdUsuario($resultado->Usuario);
                $this->setSenha($resultado->Senha);
                $this->setEmail($resultado->Email);
                $this->setIdJuridico($resultado->Id);
                $this->setNomeFantasia($resultado->Fantasia);
                $this->setRazaoSocial($resultado->Razao);
                $this->setCNPJ($resultado->CNPJ);
                return $resultado;
            } else {
                return false;
            }
        }
        else{
            return false;
        }
    }

    public function CadastroUsuarioJuridico($CNPJ, Request $request)
    {
        try {
            if ($request->campoSenha == $request->campoConfirmaSenha) {
                $pesquisa = DB::table('tb_usuario')
                    ->join('tb_usuario_juridico', 'tb_usuario.cd_usuario', '=', 'tb_usuario_juridico.cd_usuario')
                    ->where('tb_usuario_juridico.cd_cnpj', '=', $CNPJ, 'or', 'tb_usuario.nm_email', '=', $request->campoEmail)
                    ->exists();

                if (!($pesquisa)) {

                    $auto_usuario = DB::table('tb_usuario')->max('cd_usuario') + 1;
                    $auto_juridico = DB::table('tb_usuario_juridico')->max('cd_usuario_juridico') + 1;

                    $Cidade = DB::table('tb_cidade')->select('cd_cidade as Codigo')->where('nm_cidade', '=', $request->txtCidade)->first();

                    $PesquisaBairro = DB::table('tb_bairro')->select('cd_bairro as Codigo')->where('nm_bairro', '=', $request->txtBairro, 'and', 'cd_cidade', '=', $Cidade)->exists();
                    if ($PesquisaBairro) {
                        $Bairro = DB::table('tb_bairro')->select('cd_bairro as Bairro')->where('nm_bairro', '=', $request->txtBairro, 'and', 'cd_cidade', '=', $Cidade)->first();
                        $Bairro = $Bairro->Bairro;
                    } else {
                        $Bairro = DB::table('tb_bairro')->max('cd_bairro') + 1;
                    }

                    $Logradouro = DB::table('tb_logradouro')->max('cd_logradouro') + 1;

                    DB::table('tb_usuario')->insert(
                        [
                            'cd_usuario' => $auto_usuario,
                            'nm_email' => $request->campoEmail,
                            'cd_senha' => $request->campoSenha,
                            'cd_tipo_usuario' => 2
                        ]
                    );
                    DB::table('tb_usuario_juridico')->insert(
                        [
                            'cd_usuario_juridico' => $auto_juridico,
                            'nm_nome_fantasia' => $request->nomeFantasia,
                            'nm_razao_social' => $request->razaoSocial,
                            'cd_cnpj' => $CNPJ,
                            'cd_usuario' => $auto_usuario
                        ]
                    );

                    DB::table('tb_logradouro')->insert(
                        [
                            'cd_logradouro' => $Logradouro,
                            'nm_logradouro' => $request->txtRua,
                            'cd_usuario_juridico' => $auto_juridico,
                            'cd_bairro' => $Bairro
                        ]
                    );
                    return json_encode(['Status' => true, 'Mensagem' => 'Cadastro realizado com sucesso']);
                } else {
                    return json_encode(['Status' => false, 'Mensagem' => 'Usuario já cadastrado']);
                }
            } else {
                return json_encode(['Status' => false, 'Mensagem' => 'Senhas digitatas são diferentes, tente novamente!']);
            }
        } catch (Exception $e) {
            return json_encode(['Status' => false, 'Mensagem' => 'Erro ao cadastrar.']);
        }
    }

    public function EsqueciSenha($CNPJ){
        $check = DB::table('tb_usuario')
                    ->join('tb_usuario_juridico', 'tb_usuario.cd_usuario', '=', 'tb_usuario_juridico.cd_usuario')
                    ->where('tb_usuario_juridico.cd_cnpj', '=', $CNPJ)
                    ->exists();
        if($check){
            $email = DB::table('tb_usuario')->select('nm_email as Email','cd_senha as Senha')->first();
            return $email;
        }else{
            return json_encode(['Status' => false, 'Mensagem' => 'Usuario não encontrado.']);
        }
    }


    public function dadosUsuario($IdJuridico){
        $dados = DB::table('tb_usuario_juridico')
        ->join('tb_logradouro','tb_logradouro.cd_usuario_juridico','=','tb_usuario_juridico.cd_usuario_juridico')
        ->join('tb_bairro','tb_bairro.cd_bairro','=','tb_logradouro.cd_bairro')
        ->join('tb_cidade','tb_cidade.cd_cidade','=','tb_bairro.cd_cidade')
        ->where('tb_usuario_juridico.cd_usuario_juridico','=',$IdJuridico)
        ->first();
        return dd($dados);
    }
}
