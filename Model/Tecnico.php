<?php
require_once "Usuario.php";
require_once "TecnicoDAO.php";

 class Tecnico extends Usuario{
    private $IdLogin;
    private $codigoSetor;
    private $funcao;
    private $idTecnico;
    private $listaTecnico=array();

     public function getListaTecnico()
     {
         $tecnico = new TecnicoDAO();
         return $tecnico->getLista($this);
     }

     public function setList($vet)
     {
         $this->listaTecnico = $vet;
     }

     public function getList()
     {
         return $this->listaTecnico;
     }

    public function CadastroTecnico()
    {
        $tecnico = new TecnicoDAO();
        return $tecnico->incluir($this);
    }

     public  function getIdTecnico(){
         return $this->idTecnico;
     }

     // ------------------------------------------------------------

     // Seção de Sets ----------------------------------------------
     public  function setIdTecnico($idTecnico)
     {
         $this->idTecnico = $idTecnico;
     }

     public  function getFuncao(){
         return $this->funcao;
     }

     // ------------------------------------------------------------

     // Seção de Sets ----------------------------------------------

     public function pesquisarPorEmail()
     {
         $tecnico = new TecnicoDAO();
         return $tecnico->pesquisarPorEmail($this);
     }

     public  function setFuncao($funcao){
         $this->funcao = $funcao;
     }

    // Seção de Gets ---------------------------------------------
    public  function getIdLogin(){
        return $this->IdLogin;
    }

     public  function getCodigoSetor(){
         return $this->codigoSetor;
     }

    // ------------------------------------------------------------

    // Seção de Sets ----------------------------------------------
    public  function setIdLogin($IdLogin){
        $this->IdLogin = $IdLogin;
    }

     public  function setCodigoSetor($codigoSetor){
         $this->codigoSetor = $codigoSetor;
     }

     //-------------------------------------------------------------

    protected function AtendimentoChamado(){

    }

    protected function EncaminharChamado(){

    }

}

