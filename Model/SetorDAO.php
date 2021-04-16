<?php
require "ConnectionFactory.php";
class SetorDAO
{
    public function incluir($setor)
    {
        try {
            $minhaConexao = ConnectionFactory::getconnection();
            //codigo para conectar e incluir no banco
            $sql = $minhaConexao->prepare("insert into teste00.setor (codigo_setor, nome_setor, tel_setor, email) 
            values (:codigo, :nome, :tel, :email);");
            $sql->bindParam("nome", $nomeSetor);
            $sql->bindParam("codigo", $codigoSetor);
            $sql->bindParam("tel", $telefoneSetor);
            $sql->bindParam("email", $emailSetor);
            $nomeSetor = $setor->getNome();
            $codigoSetor = $setor->getCodigo();
            $telefoneSetor = $setor->getTel();
            $emailSetor = $setor->getEmail();
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

    public function getLista($setor){
        try{
            $minhaConexao = ConnectionFactory::getconnection();
            //codigo para conetar e incluir no banco
            $sql = $minhaConexao->prepare("select * from teste00.setor;");
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            $vet = array();
            $i=0;

            while ($linha = $sql->fetch($result))
            {
                $vet[$i]=array($linha['codigo_setor'], $linha['nome_setor'], $linha['tel_setor'], $linha['email']);
                $i++;
            }

            $setor->setLista($vet);
            return true; //incluido com sucesso
        }
        catch(PDOException $e) {
            //fazer o through e tirar esse echo
            //echo $e->getMessage();
            echo "entrou no catch".$e->getmessage();
            return false;
        }
        $minhaConexao = null;
    }
}