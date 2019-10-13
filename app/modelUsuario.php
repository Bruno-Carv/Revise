<?php

namespace App;

use App\Mail\SendMailUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;

class modelUsuario extends Model
{
    private $IdUsuario;
    private $Email;
    private $Senha;

    /**
     * Get the value of IdUsuario
     */
    public function getIdUsuario()
    {
        return $this->IdUsuario;
    }

    /**
     * Set the value of IdUsuario
     *
     * @return  self
     */
    public function setIdUsuario($IdUsuario)
    {
        $this->IdUsuario = $IdUsuario;

        return $this;
    }

    /**
     * Get the value of Email
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set the value of Email
     *
     * @return  self
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * Get the value of Senha
     */
    public function getSenha()
    {
        return $this->Senha;
    }

    /**
     * Set the value of Senha
     *
     * @return  self
     */
    public function setSenha($Senha)
    {
        $this->Senha = $Senha;

        return $this;
    }

    public function ValidarCampos(Request $request)
    {
        $r = $request->all();
        foreach ($r as $value => $key) {
            if (empty($key)) {
                return false;
            }
        }
        return true;
    }


    public function Email($Dados)
    {
        $destino = $Dados->Email;

        $enviaremail = Mail::to($destino)->send(new SendMailUser($Dados));

        if ($enviaremail) {
            return json_encode(['Status' => true, 'Mensagem' => "E-MAIL ENVIADO COM SUCESSO! O link será enviado para o e-mail fornecido no formulário"]);
        } else {
            return json_encode(['Status' => false, 'Mensagem' => "ERRO AO ENVIAR E-MAIL!"]);
        }
    }

    public function VeiculosDoUsuario(){
        /*
                SELECT
              v.cd_veiculo as 'id',
              v.cd_placa as 'placa',
              m.nm_modelo as 'modelo'
              FROM tb_veiculo as v
              inner join tb_modelo as m on v.cd_modelo = m.cd_modelo
              inner join tb_usuario as u on u.cd_usuario = v.cd_usuario
              and v.cd_usuario= ?

        */

        $Veiculos = DB::table('tb_veiculo')
        ->join('tb_modelo','tb_veiculo.cd_modelo','=','tb_modelo.cd_modelo')
        ->join('tb_usuario','tb_usuario.cd_usuario','=','tb_veiculo.cd_usuario')
        ->select('tb_veiculo.cd_veiculo as id','tb_veiculo.cd_placa as placa','tb_modelo.nm_modelo as modelo')
        ->where('tb_veiculo.cd_usuario','=', $this->getIdUsuario())
        ->get();
        return dd($Veiculos);
    }
}
