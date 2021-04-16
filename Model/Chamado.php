<?php
require_once "ChamadoDAO.php";
class Chamado{
    private $idChamado;
    private $nomeUsuario;
    private $idSetor;
    private $problema;
    private $data;
    private $cpfUsuario;
    private $email;
    private $telefoneUsuario;
    private $descricao;
    private $linkInstlacao;
    private $solucao;
    private $estado;
    private $cpfTecnico;
    private $listaChamado=array();


    public function CadastroChamado()
    {
        $chamado = new ChamadoDAO();
        return $chamado->incluir($this);
    }

    public function atualizarChamado()
    {
        $chamado = new ChamadoDAO();
        return $chamado->atualizarChamado($this);
    }

    public function buscaIdUltimoChamadoInserido()
    {
        $chamado = new ChamadoDAO();
        $chamado->buscaIdUltimoChamado($this);
        return $this->getIdChamado();
    }

    //Seção de sets

    public function setList($vet)
    {
        $this->listaChamado = $vet;
    }

    public function setCpfTecnico($cpfTecnico){
        $this->cpfTecnico = $cpfTecnico;
    }

    public function setSolucao($solucao){
        $this->solucao = $solucao;
    }

    public function setIdChamado($idChamado){
        $this->idChamado = $idChamado;
    }

    public function setIdSetor($idSetor){
        $this->idSetor = $idSetor;
    }

    public function setNome($nomeUsuario){
        $this->nomeUsuario = $nomeUsuario;
    }

    public function setCpf($cpfUsuario){
        $this->cpfUsuario = $cpfUsuario;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setTelefone($telefoneUsuario){
        $this->telefoneUsuario = $telefoneUsuario;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function setProblema($problema){
        $this->problema = $problema;
    }

    public function setData($data){
        $this->data = $data;
    }

    public function setLink($linkInstlacao){
        $this->linkInstlacao = $linkInstlacao;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }

    // Seção de gets

    public function getListChamadosTecnico()
    {
        $chamado = new ChamadoDAO();
        return $chamado->buscaChamadosTecnico($this);
    }

    public function getList()
    {
        return $this->listaChamado;
    }

    public function getSolucao()
    {
        return $this->solucao;
    }

    public function getData()
    {
        return $this->data;
    }


    public function getIdChamado()
    {
        return $this->idChamado;
    }

    public function getIdSetor()
    {
        return $this->idSetor;
    }

    public function getCpf()
    {
        return $this->cpfUsuario;

    }

    public function getNome()
    {
        return $this->nomeUsuario;

    }

    public function getEmail()
    {
        return $this->email;

    }

    public function getTelefone()
    {
        return $this->telefoneUsuario;
    }

    public function getProblema()
    {

        return $this->problema;
    }

    public function getDescricao()
    {

        return $this->descricao;
    }

    public function getLink()
    {
        return $this->linkInstlacao;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function getCpfTecnico()
    {
        return $this->cpfTecnico;
    }
}
