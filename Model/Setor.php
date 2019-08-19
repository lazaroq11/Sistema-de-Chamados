<?php

class Setor{
    private $codigo;
    private $nome;
    private $tel;
    private $email;

     //construct
    function __construct($codigo, $nome, $tel, $email){

        $this->codigo = $codigo;
        $this->nome = $nome;
        $this ->tel = $tel;
        $this ->email = $email;
    }

    //secao de sets

    public function setCodigo($codigo){
    $this->codigo = $codigo;
}

    public function setNome($nome){

    $this->nome = $nome;

}

    public function setTel($tel){

    $this->tel = $tel;

}

    public function setEmail($email){

    $this->email = $email;
}


    //secao de gets

    public function getCodigo(){

    return $this->codigo;
}

    public function getNome(){

    return $this->nome;
}

    public function getTel(){

    return $this->tel;

}

    public function getEmail(){

        return $this->email;

    }
}





