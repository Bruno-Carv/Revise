<?php
require_once "../Lib/connection.php";
require_once "../Models/modelUsuario.php";

class UserJuridico extends Usuario
{
    private $RazaoSocial;
    private $NomeFantasia;

    public function logar($CPFouCNPJ,$senha)
    {

            $conn = new conexaoPDO;
            $conn = $conn->getConnection();

            $sql = "call chkLoginJuridico(:CPFouCNPJ,:senha);";

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


    public function getRazaoSocial()
    {
        return $this->RazaoSocial;
    }

    public function setRazaoSocial($RazaoSocial)
    {
        $this->RazaoSocial = $RazaoSocial;

        return $this;
    }
 
    public function getNomeFantasia()
    {
        return $this->NomeFantasia;
    }

    public function setNomeFantasia($NomeFantasia)
    {
        $this->NomeFantasia = $NomeFantasia;

        return $this;
    }
}
?>