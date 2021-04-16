<?php

require_once "ConnectionFactory.php";
class LoginDAO
{
    public function incluir($login)
    {
        try {
            $minhaConexao = ConnectionFactory::getconnection();
            //codigo para conectar e incluir no banco
            $sql = $minhaConexao->prepare("insert into teste00.login (usuario, senha) 
            values (:usuario, :senha);");
            $sql->bindParam("usuario", $usuario);
            $sql->bindParam("senha", $senha);
            $usuario = $login->getUsuario();
            $senha = $login->getSenha();
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

    public function pesquisar($login){
        try{
            $minhaConexao = ConnectionFactory::getconnection();
            //codigo para conectar e incluir no banco
            $sql = $minhaConexao->prepare("select * from teste00.login where usuario = :usuario limit 1");
            $sql->bindParam("usuario",$usuario);
            $usuario = $login->getUsuario();

            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);

            while ($linha = $sql->fetch($result)) {
                $login->setIdLogin($linha['id_login']);
                $login->setUsuario($linha['usuario']);
                $login->setSenha($linha['senha']);
            }

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

    public function validarLogin($login){
        try{
            $minhaConexao = ConnectionFactory::getconnection();
            //codigo para conectar e incluir no banco
            $sql = $minhaConexao->prepare("select * from teste00.login where usuario = :usuario and senha = :senha limit 1");
            $sql->bindParam("usuario",$usuario);
            $sql->bindParam("senha",$senha);
            $usuario = $login->getUsuario();
            $senha = $login->getSenha();

            $sql->execute();

            return $sql->rowCount(); //incluido com sucesso
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