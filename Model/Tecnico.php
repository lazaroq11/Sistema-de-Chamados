<?php
 class Tecnico extends Usuario {
    private $login;

    function __construct($login)
    {
        parent::__construct();
        $this->login = $login;
    }

    // Seção de Gets ---------------------------------------------
    public  function getLogin(){
        return $this->login;
    }
    // ------------------------------------------------------------

    // Seção de Sets ----------------------------------------------
    public  function setLogin($login){
        $this->login = $login;
    }
    //-------------------------------------------------------------

    protected function AtendimentoChamado(){

    }

    protected function EncaminharChamado(){

    }

}

