<?php
require_once "LoginDAO.php";

class Login
{
    private $idLogin;
    private $usuario;
    private $senha;

    function __construct()
    {
        $this->senha = rand(10000000, 99999999);
    }

    public function Incluir()
    {
        $login = new LoginDAO();
        return $login->incluir($this);
    }

    public function pesquisarLogin()
    {
        $login = new LoginDAO();
        return $login->pesquisar($this);
    }

    public function validaLogin()
    {
        $login = new LoginDAO();
        return $login->validarLogin($this);
    }

    //secao de sets

    public function setIdLogin($idLogin)
    {
        $this->idLogin = $idLogin;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }


    //secao de gets

    public function getIdLogin()
    {
        return $this->idLogin;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function getSenha()
    {
        return $this->senha;
    }

}





