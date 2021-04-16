<?php
require_once "Tecnico.php";
require_once "GerenteDAO.php";

class Gerente extends Tecnico {

    private $idGerente;
    private $listaGerente=array();

    public  function getIdGerente(){
        return $this->idGerente;
    }

    // ------------------------------------------------------------

    public function getListaGerente()
    {
        $gerente = new GerenteDAO();
        return $gerente->getLista($this);
    }

    public function setList($vet)
    {
        $this->listaGerente = $vet;
    }

    public  function setIdGerente($idGerente){
        $this->idGerente = $idGerente;
    }

    public function CadastroGerente(){
        $gerente = new GerenteDAO();
        return $gerente->incluir($this);
    }

    public function pesquisarPorEmail()
    {
        $gerente = new GerenteDAO();
        return $gerente->pesquisarPorEmail($this);
    }

    public function ListaGerente()
    {

    }

    public function getList()
    {
        return $this->listaGerente;
    }

}

