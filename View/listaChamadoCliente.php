<?php
require_once "../Model/Setor.php";
require_once "../Model/Chamado.php";
session_start();
$numeroChamado = 0;
if (isset($_POST["numeroChamado"])) $numeroChamado = $_POST["numeroChamado"];
$setor = new Setor();
$chamado = new Chamado();
$chamado->setIdChamado(null);
$chamado->getListChamadosTecnico();
$chamados = $chamado->getList();
$setor->getListaSetor();
$setores = $setor->getLista();
$quantSetores = count($setores);
$quantChamados = count($chamados);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lista Chamados</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style-lazaro.css">

</head>


<body>

<div id="MainContainer" class="mainContainer">

    <a href="https://portal.uneb.br/"><img id="logoUnebCantoEsquerdoSuperior" src="image/LogoUneb.png"></a>
    <div id="logoUnebCantoDireito"></div>
    <div class="divTopo">
        <h1 class="tituloPrincipal">Lista Chamados</h1>
    </div>



    <div id="navbar" class="navbar">

        <ul>
            <li class="listOpc"><a href="Login.php">Logout</a></li>
        </ul>
    </div>
    <div id="boxAdAdmArea" class="boxAd">

        <div id="table" style="position: absolute; left:85%" class="table">
            <table cellpadding="10" cellspacing="25" border="1" style="border-radius: 15px" >
                <tr>
                    <th style="border-radius: 15px; text-shadow: black 1px 1px 1px">Área <?php echo $_POST["numeroChamado"]; ?></th>
                    <th style="border-radius: 15px; text-shadow: black 1px 1px 1px">Número</th>
                    <th style="border-radius: 15px; text-shadow: black 1px 1px 1px">Data</th>
                    <th style="border-radius: 15px; text-shadow: black 1px 1px 1px">Situação</th>
                    <th style="border-radius: 15px; text-shadow: black 1px 1px 1px">Usuário</th>
                </tr>
                <?php for ($i=0;$i<$quantChamados;$i++) { if ($chamados[$i][0] == $numeroChamado){  ?>
                    <tr>
                    <td><?php echo $chamados[$i][4] ?></td>
                    <td><?php echo $chamados[$i][0] ?></td>
                    <td><?php echo $chamados[$i][1] ?></td>
                    <td><?php if ($chamados[$i][8] == 'P') echo "Pendente"; elseif ($chamados[$i][8] == 'A') echo "Aberto"; else echo "Fechado"; ?></td>
                    <td><?php echo $chamados[$i][3] ?></td>

                    </tr><?php  }}?>
            </table>
        </div>
    </div>
</body>
<footer class="footerSi">Desenvolvido pela equipe de estudo de software da Universidade do Estado da Bahia, Campus I, Salvador, BA.</footer>
<script src="script/scriptAure.js"></script>
</html>
