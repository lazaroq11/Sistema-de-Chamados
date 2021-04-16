<?php
require_once "../Model/Chamado.php";
$_GET["idchamado"];

$chamado = new Chamado();
$chamado->setIdChamado($_GET["idchamado"]);
if ($chamado->atualizarChamado() > 0)
{
    echo  "**************************    Atendido com sucesso!   ****************************";
    echo "<a href='../View/ListaChamado.php'>Voltar para lista de chamados</a>";
}else {
    echo "** Houve um erro no atendimento do chamado **";
    echo "<a href='../View/ListaChamado.php'>Voltar para lista de chamados</a>";
}