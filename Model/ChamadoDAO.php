<?php
require_once "ConnectionFactory.php";
class ChamadoDAO
{
    public function incluir($chamado)
    {
        try {
            $minhaConexao = ConnectionFactory::getconnection();
            //codigo para conectar e incluir no banco
            $sql = $minhaConexao->prepare("insert into teste00.chamado (data_att_estado, cpf_usuario_chamado, nome_solicitante, id_setor, descricao_chamado,
            solucao_chamado, cpf_tecnico, estado_chamado, link_software, email_usuario, telefone_usuario, problema) 
            values (:dataChamado, :cpfUsuario, :nomeUsuario, :idSetor, :descricao, :solucao, :cpfTecnico, :estado, :link, :emailUsuario, :telefoneUsuario, :problema);");
            $sql->bindParam("nomeUsuario", $nomeUsuario);
            $sql->bindParam("cpfUsuario", $cpfUsuario);
            $sql->bindParam("emailUsuario", $emailUsuario);
            $sql->bindParam("telefoneUsuario", $telefoneUsuario);
            $sql->bindParam("descricao", $descricao);
            $sql->bindParam("estado", $estado);
            $sql->bindParam("link", $link);
            $sql->bindParam("solucao", $solucao);
            $sql->bindParam("idSetor", $idSetor);
            $sql->bindParam("problema", $problema);
            $sql->bindParam("dataChamado", $dataChamado);
            $sql->bindParam("cpfTecnico", $cpfTecnico);
            $nomeUsuario = $chamado->getNome();
            $cpfUsuario = $chamado->getCpf();
            $emailUsuario = $chamado->getEmail();
            $telefoneUsuario = $chamado->getTelefone();
            $descricao = $chamado->getDescricao();
            $estado = $chamado->getEstado();
            $solucao = $chamado->getSolucao();
            $dataChamado = $chamado->getData();
            $link = $chamado->getLink();
            $problema = $chamado->getProblema();
            $idSetor = $chamado->getIdSetor();
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

    public function atualizarChamado($chamado)
    {
        try {
            $minhaConexao = ConnectionFactory::getconnection();
            //codigo para conectar e incluir no banco
            $sql = $minhaConexao->prepare("update teste00.chamado set estado_chamado = 'F' where id_chamado = :idChamado ");
            $sql->bindParam("idChamado", $idChamado);
            $idChamado = $chamado->getIdChamado();
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

    public function buscaIdUltimoChamado($chamado){
        try{
            $minhaConexao = ConnectionFactory::getconnection();
            //codigo para conectar e incluir no banco
            $sql = $minhaConexao->prepare("select max(id_chamado) as id_chamado from teste00.chamado where email_usuario = :email");
            $sql->bindParam("email",$email);
            $email = $chamado->getEmail();

            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);

            while ($linha = $sql->fetch($result)) {
                $chamado->setIdChamado($linha['id_chamado']);
                /*$chamado->setUsuario($linha['data_att_estado']);
                $chamado->setSenha($linha['cpf_usuario_chamado']);
                $chamado->setSenha($linha['nome_solicitante']);
                $chamado->setSenha($linha['id_setor']);
                $chamado->setSenha($linha['descricao_chamado']);
                $chamado->setSenha($linha['solucao_chamado']);
                $chamado->setSenha($linha['cpf_tecnico']);
                $chamado->setSenha($linha['estado_chamado']);
                $chamado->setSenha($linha['link_software']);
                $chamado->setSenha($linha['email_usuario']);
                $chamado->setSenha($linha['telefone_usuario']);
                $chamado->setSenha($linha['problema']);*/
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

    public function buscaChamadosTecnico($chamado){
        try{
            $minhaConexao = ConnectionFactory::getconnection();
            $sql = new mysqli();
            //codigo para conectar e incluir no banco
            //if ($chamado->getIdChamado() == null)
                $sql = $minhaConexao->prepare("select * from teste00.chamado");
            //else
              //  $sql = $minhaConexao->prepare("select * from teste00.chamado where id_chamado = :id_chamado");
            $sql->bindParam("id_setor",$idSetor);
            $sql->bindParam("cpf_tecnico",$cpfTec);
            $sql->bindParam("id_chamado",$idChamado);
            $idSetor = $chamado->getIdSetor();
            $cpfTec = 98585513112; // $chamado->getCPF();
            $idChamado = 21000010; // $chamado->getIdChamado();
            $_SESSION["testee"] = $cpfTec;
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            $vet = array();
            $i = 0;

            while ($linha = $sql->fetch($result))
            {
               $vet[$i]=array($linha['id_chamado'],
                   $linha['data_att_estado'],
                   $linha['cpf_usuario_chamado'],
                   $linha['nome_solicitante'],
                   $linha['id_setor'],
                   $linha['descricao_chamado'],
                   $linha['solucao_chamado'],
                   $linha['cpf_tecnico'],
                   $linha['estado_chamado'],
                   $linha['link_software'],
                   $linha['email_usuario'],
                   $linha['telefone_usuario'],
                   $linha['problema']);
               $i++;
            }

            $chamado->setList($vet);
            return $sql->rowCount();  // com sucesso
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
