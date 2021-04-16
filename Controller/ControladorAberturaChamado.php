<?php
session_start();
$estadoPendente = "P";
require_once "../Model/Chamado.php";

$novoChamado = new Chamado();
$novoChamado->setNome($_POST["nome"]);
$novoChamado->setCpf($_POST["cpf"]);
$novoChamado->setIdSetor($_POST["SelectAdAreaTec"]);
$novoChamado->setEmail($_POST["email"]);
$novoChamado->setTelefone($_POST["telefone"]);
$novoChamado->setProblema($_POST["problema"]);
$novoChamado->setDescricao($_POST["descricao"]);
$novoChamado->setData(date("Y-m-d"));
$novoChamado->setEstado($estadoPendente);

$resposta = $novoChamado->CadastroChamado();
if ( $resposta > 0){
    $_SESSION["mensagemSucesso"] = "*** Email Automático, favor não responder. ***<br><br>

Sua Solicitação foi registrada, e esta em processo de atendimento.<br><br>

Chamado:          ". $novoChamado->buscaIdUltimoChamadoInserido() ."<br>
Tipo:                  Serviços de Suporte<br>
Data Abertura: " . $novoChamado->getData() . "<br>
Descrição:         " . $novoChamado->getDescricao() . "<br><br>

Qualquer dúvida ligue para o ramal  Central 2298<br><br>

Prezado (a) Sr(a), " . $novoChamado->getNome() . "<br><br>

Boa tarde,<br>
Informamos que o chamado " . $novoChamado->getIdChamado() . " foi concluído com sucesso.s<br>
***************************************************************";
    header('Location: ..\View\Sucesso.php');
}
else
    header('Location: ..\View\Erro.php');
