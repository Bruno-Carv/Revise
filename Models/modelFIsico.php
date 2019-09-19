<?php
require_once 'modelUsuario.php';
require_once '../Lib/connection.php';

class UserFisico extends Usuario
{
    private $nome;
    private $dataNascimento;
    private $tipoConta;
    private $plano;

    function Cadastrar($nome, $email, $cpf, $dataNascimento, $senha,$tipoConta,$plano)
    {
        $this->setID($this->getID());
        $this->setTipoConta($tipoConta);
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setCPFouCNPJ($cpf);
        $this->setDataNascimento($dataNascimento);
        $this->setSenha($senha);
        $this->setPlano($plano);

        $conn = new conexaoPDO;
        $conn = $conn->getConnection();

        $sql = "INSERT INTO tb_usuario(cd_usuario,nm_email,cd_senha,cd_plano,cd_tipo_usuario) VALUES (:idUsuario,:email,:senha,:plano,1)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':idUsuario', $this->getId(), PDO::PARAM_STR);
        $stmt->bindParam(':email', $this->getId(), PDO::PARAM_STR);
        $stmt->bindParam(':senha', $this->getId(), PDO::PARAM_STR);
        $stmt->bindParam(':plano', $this->getId(), PDO::PARAM_STR);

        if($stmt->execute())
            {
                echo 'Cadastro';
            }
            else
            {
                return false;
            }
    }

    public function logar($CPFouCNPJ,$senha)
    {

            $conn = new conexaoPDO;
            $conn = $conn->getConnection();

            $sql = "call SignInFisico(:CPFouCNPJ,:senha)";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':CPFouCNPJ', $CPFouCNPJ, PDO::PARAM_INT);
            $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
            
            if($stmt->execute())
            {
                    $RES = $stmt->rowCount(); 
                    if($RES == 1)
                    {
                            return true;
                    }
                    else
                    {
                            return false;
                    }
            }
            else
            {
                    echo "Falha na Execução";
            }
    }

    private function getNome()
    {
        return $this->nome;
    }

    private function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    private function getCpf()
    {
        return $this->cpf;
    }

    private function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    private function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    private function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;

        return $this;
    }
    private function getTipoConta()
    {
        return $this->tipoConta;
    }
    private function setTipoConta($tipoConta)
    {
        $this->tipoConta = $tipoConta;

        return $this;
    }

    public function getPlano()
    {
        return $this->plano;
    }

    public function setPlano($plano)
    {
        $this->plano = $plano;

        return $this;
    }
}
