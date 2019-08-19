<?php

abstract class Usuario{
    private $Nome;
    private $CPF;
    private $Email;
    private $Setor;
    private $Telefone;

    function __construct($Nome, $CPF, $Email, $Setor, $Telefone)
    {
        $this->Nome = $Nome;
        $this->CPF = $CPF;
        $this->Email = $Email;
        $this->Setor = $Setor;
        $this->Telefone = $Telefone;
    }

    // Seção de Gets ----------------------------------------------
    public  function getNome(){
        return $this->Nome;
    }

    public  function getCPF(){
        return $this->CPF;
    }

    public  function getEmail(){
        return $this->Email;
    }

    public  function getSetor(){
        return $this->Setor;
    }

    public  function getTelefone(){
        return $this->Telefone;
    }
    // ------------------------------------------------------------

    // Seção de Sets ----------------------------------------------
    public  function setNome($Nome){
        $this->Nome = $Nome;
    }

    public  function setCPF($CPF){
        $this->CPF = $CPF;
    }

    public  function setEmail($Email){
        $this->Email = $Email;
    }

    public  function setSetor($Setor){
        $this->Setor = $Setor;
    }

    public  function setTelefone($Telefone){
        $this->Telefone = $Telefone;
    }
    // ------------------------------------------------------------


}
