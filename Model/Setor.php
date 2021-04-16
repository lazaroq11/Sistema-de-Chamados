<?php
require "SetorDAO.php";
class Setor{
    private $codigo;
    private $nome;
    private $tel;
    private $email;
    private $listaSetores=array();


    public function Incluir()
    {
        $setor = new SetorDAO();
        return $setor->incluir($this);
    }

    public function getListaSetor()
    {
        $setor = new SetorDAO();
        return $setor->getLista($this);
    }

    //secao de sets

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setLista($matriz)
    {
        $this->listaSetores = $matriz;
    }



    //secao de gets

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getLista()
    {
        return $this->listaSetores;
    }
}





