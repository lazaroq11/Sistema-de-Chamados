<?php
require_once "ConnectionFactory.php";
class TecnicoDAO
{
    public function incluir($tecnico)
    {
        try {
            $minhaConexao = ConnectionFactory::getconnection();
            //codigo para conectar e incluir no banco
            $sql = $minhaConexao->prepare("insert into teste00.tecnico (cpf_tecnico, nome_tecnico, email_tecnico, funcao_tecnico, codigo_setor_tecnico,
            id_login_tecnico, telefone_tecnico) 
            values (:cpfTecnico, :nomeTecnico, :emailTecnico, :funcao, :codigoSetor, :idLogin, :telefoneTecnico);");
            $sql->bindParam("nomeTecnico", $nomeTecnico);
            $sql->bindParam("cpfTecnico", $cpfTecnico);
            $sql->bindParam("emailTecnico", $emailTecnico);
            $sql->bindParam("telefoneTecnico", $telefoneTecnico);
            $sql->bindParam("codigoSetor", $codigoSetor);
            $sql->bindParam("idLogin", $idLogin);
            $sql->bindParam("funcao", $funcao);
            $nomeTecnico = $tecnico->getNome();
            $cpfTecnico = $tecnico->getCPF();
            $emailTecnico = $tecnico->getEmail();
            $telefoneTecnico = $tecnico->getTelefone();
            $codigoSetor = $tecnico->getCodigoSetor();
            $idLogin = $tecnico->getIdLogin();
            $funcao = $tecnico->getFuncao();
            $sql->execute();

            return $sql->rowCount(); //incluido com sucesso
        } catch (PDOException $e) {
            //fazer o through e tirar esse echo
            //echo $e->getMessage();
            echo "entrou no catch" . $e->getmessage();
            return 0;
        }
        $minhaConexao = null;
    }

    public function getLista($tecnico)
    {
        try {
            $minhaConexao = ConnectionFactory::getconnection();
            //codigo para conetar e incluir no banco
            $sql = $minhaConexao->prepare("select * from teste00.tecnico;");
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            $vet = array();
            $i = 0;

            while ($linha = $sql->fetch($result)) {
                $vet[$i] = array($linha['id_tecnico'], $linha['cpf_tecnico'], $linha['nome_tecnico'],
                    $linha['email_tecnico'], $linha['funcao_tecnico'], $linha['codigo_setor_tecnico'], $linha['id_login_tecnico'], $linha['telefone_tecnico']);
                $i++;
            }

            $tecnico->setList($vet);
            return true; //incluido com sucesso
        } catch (PDOException $e) {
            //fazer o through e tirar esse echo
            //echo $e->getMessage();
            echo "entrou no catch" . $e->getmessage();
            return false;
        }
        $minhaConexao = null;
    }

    public function pesquisarPorEmail($tecnico)
    {
        try {
            $minhaConexao = ConnectionFactory::getconnection();
            //codigo para conectar e incluir no banco
            $sql = $minhaConexao->prepare("select * from teste00.tecnico where email_tecnico = :email limit 1;");
            $sql->bindParam("email", $email);
            $email = $tecnico->getEmail();
            $sql->execute();

            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            while ($linha = $sql->fetch($result)) {
                $tecnico->setCodigoSetor($linha['codigo_setor_tecnico']);
                $tecnico->setCPF($linha['cpf_tecnico']);
            }


            return $sql->rowCount(); //encontrado com sucesso
        } catch (PDOException $e) {
            //fazer o through e tirar esse echo
            //echo $e->getMessage();
            echo "entrou no catch" . $e->getmessage();
            return 0;
        }
        $minhaConexao = null;
    }

}