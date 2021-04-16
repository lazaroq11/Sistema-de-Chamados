<?php

class Usuario{
    private $Nome;
    private $CPF;
    private $Email;
    private $Telefone;

    // Seção de Gets ----------------------------------------------
    public function getNome(){
        return $this->Nome;
    }

    public function getCPF(){
        return $this->CPF;
    }

    public function getEmail(){
        return $this->Email;
    }

    public function getTelefone(){
        return $this->Telefone;
    }
    // ------------------------------------------------------------

    // Seção de Sets ----------------------------------------------
    public function setNome($Nome){
        $this->Nome = $Nome;
    }

    public function setCPF($CPF){
        $this->CPF = $CPF;
    }

    public function setEmail($Email){
        $this->Email = $Email;
    }

    public function setTelefone($Telefone){
        $this->Telefone = $Telefone;
    }
    // ------------------------------------------------------------


}
