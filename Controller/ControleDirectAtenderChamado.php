<?php
if (isset($_GET["idchamado"]))
{
    header('Location: ..\View\Módulo Atendente.php?idchamado=' . $_GET["idchamado"]);
}
