<?php
session_start();
echo $_SESSION["mensagemSucesso"];
unset($_SESSION["mensagemSucesso"]);
?>
<li style="list-style-type: none; font-weight: bolder" class="listOpc"><a href="AdmGeralMain.php">Voltar</a></li>
  