<?php

class Chamado{
    private $setor;
    private $ramal;
    private $problema;
    private $software;
    private $data;
    private $link;

    //construct
    public function __construct($setor, $ramal, $problema, $software, $data, $link){
        $this->setor = $setor;
        $this->ramal = $ramal;
        $this->problema = $problema;
        $this->software = $software;
        $this->data = $data;
        $this->link = $link;
    }

    //Seção de sets

    public function setSetor($setor){
        $this->setor = $setor;
    }

    public function setRamal($ramal){
        $this->ramal = $ramal;
    }


    public function setProblema($problema){
        $this->problema = $problema;
    }

    public function setSoftware($software){
        $this->software = $software;
    }

    public function setData($data){
        $this->data = $data;
    }


    public function setLink($link){
        $this->link = $link;
    }


    // Seção de gets

    public function getSetor(){
        return $this->setor;

    }


    public function getRamal(){

        return $this->ramal;
    }


    public function getProblema(){

        return $this->problema;
    }


    public function getSoftware(){

        return $this->software;

    }

    public function getData(){

        return $this->data;

    }

    public function getLink(){

        return $this->link;
    }

}
