<?php

require_once "ConnectionFactory.php";
class GerenteDAO
{
    public function incluir($gerente)
    {
        try {
            $minhaConexao = ConnectionFactory::getconnection();
            //codigo para conectar e incluir no banco
            $sql = $minhaConexao->prepare("insert into teste00.gerente (cpf_gerente, nome_gerente, email_gerente, codigo_setor_gerente, id_login_gerente,
            telefone_gerente, funcao_gerente) 
            values (:cpfGerente, :nomeGerente, :emailGerente, :codigoSetor, :idLogin, :telefoneGerente, :funcao);");
            $sql->bindParam("nomeGerente", $nomeGerente);
            $sql->bindParam("cpfGerente", $cpfGerente);
            $sql->bindParam("emailGerente", $emailGerente);
            $sql->bindParam("telefoneGerente", $telefoneGerente);
            $sql->bindParam("codigoSetor", $codigoSetor);
            $sql->bindParam("idLogin", $idLogin);
            $sql->bindParam("funcao", $funcao);
            $nomeGerente = $gerente->getNome();
            $cpfGerente = $gerente->getCPF();
            $emailGerente = $gerente->getEmail();
            $telefoneGerente = $gerente->getTelefone();
            $codigoSetor = $gerente->getCodigoSetor();
            $idLogin = $gerente->getIdLogin();
            $funcao = $gerente->getFuncao();
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

    public function pesquisarPorEmail($gerente)
    {
        try {
            $minhaConexao = ConnectionFactory::getconnection();
            //codigo para conectar e incluir no banco
            $sql = $minhaConexao->prepare("select * from teste00.gerente where email_gerente = :email limit 1;");
            $sql->bindParam("email", $email);
            $email = $gerente->getEmail();

            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            while ($linha = $sql->fetch($result)) {
                $gerente->setCodigoSetor($linha['codigo_setor_gerente']);
                $gerente->setCPF($linha['cpf_gerente']);
            }
            $sql->execute();
            return $sql->rowCount(); //encontrado com sucesso
        } catch (PDOException $e) {
            //fazer o through e tirar esse echo
            //echo $e->getMessage();
            echo "entrou no catch" . $e->getmessage();
            return 0;
        }
        $minhaConexao = null;
    }

    public function getLista($gerente)
    {
        try {
            $minhaConexao = ConnectionFactory::getconnection();
            //codigo para conetar e incluir no banco
            $sql = $minhaConexao->prepare("select * from teste00.gerente;");
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            $vet = array();
            $i = 0;

            while ($linha = $sql->fetch($result)) {
                $vet[$i] = array($linha['id_gerente'], $linha['cpf_gerente'], $linha['nome_gerente'],
                $linha['email_gerente'], $linha['codigo_setor_gerente'], $linha['id_login_gerente'], $linha['telefone_gerente'], $linha['funcao_gerente']);
                $i++;
            }

            $gerente->setList($vet);
            return true; //incluido com sucesso
        } catch (PDOException $e) {
            //fazer o through e tirar esse echo
            //echo $e->getMessage();
            echo "entrou no catch" . $e->getmessage();
            return false;
        }
        $minhaConexao = null;
    }
}