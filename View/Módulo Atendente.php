<?php
require_once "../Model/Setor.php";
require_once "../Model/Chamado.php";
session_start();
$setor = new Setor();
$cpf = (string)$_SESSION["cpfTec"];
$chamado = new Chamado();
$chamado->setIdSetor($_SESSION["codigoSetorTec"]);
$chamado->setCpfTecnico($_SESSION["cpfTec"]);
$chamado->setIdChamado(null);
$chamado->getListChamadosTecnico();
$chamados = $chamado->getList();
$setor->getListaSetor();
$setores = $setor->getLista();
$quantSetores = count($setores);
$quantChamados = count($chamados);
$chamadoSel = array(); $i=0;
while ($i<$quantChamados){ if ($chamados[$i][0] == $_GET["idchamado"]){ $chamadoSel = $chamados[$i]; break; } $i++;}
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="stylesheet" type="text/css" href="css/styleVictor.css">
    <title>Módulo Atendente</title>
    <meta charset="utf-8">
  </head>
  <body>
  <div id="MainContainer" class="mainCotainer">
        <a href="https://portal.uneb.br/"><img id="logoUnebCantoEsquerdoSuperior" src="image/LogoUneb.png"></a>
        <div id="logoUnebCantoDireito"></div>
	    <div class="divTopo">
            <h1 class="tituloPrincipal">Módulo Atendente</h1>
        </div>
        <div id="MenuOpcoesTelaAtendente" >
            <br><br><br><br>
            <ul class="listaOpcoes">
                 <li class="listOpc"><a href="ListaChamado.php">Voltar</a></li>
                 <li class="listOpc"><a href="Login.php">Logout </a></li>
             </ul>

            <div id="chamada" class="usuario">

                Número do chamado:
                <input disabled class="inptModuloAtendente" type="text" name="Numero" value="<?php echo $chamadoSel[0] ?>">
                <br>
                Solicitante:
                <input disabled class="inptModuloAtendente" type="text" name="Solicitante" value="<?php echo $chamadoSel[3] ?>">
                <br>
                Setor:
                <input disabled class="inptModuloAtendente" type="texto" name="Setor" value="<?php echo $chamadoSel[4] ?>">
                <br>
                Email:
                <input disabled class="inptModuloAtendente" type="text" name="Email" size="50" maxlength="100" value="<?php echo $chamadoSel[10] ?>">
                <br>
                Ramal:
                <input disabled class="inptModuloAtendente" type="text" name="Ramal" value="2298">
                <br>
                Telefone:
                <input disabled class="inptModuloAtendente" type="texto" name="Telefone" value="<?php echo $chamadoSel[12] ?>">
                <br>
                Equipamento:
                <input disabled class="inptModuloAtendente" type="texto" name="Equip"size="50" maxlength="100" value="<?php echo $chamadoSel[12] ?>">
                <br><br>

                <a href="#">Ver imagem</a><br><br>

                Observações: <br>
                <textarea class="txtModuloAtendente"  disabled name="nome" placeholder="<?php echo $chamadoSel[5] ?>" rows="2" cols="20"></textarea><br>

                Prioridade:
                <select name="prioridade">
                    <option style="background-color: chartreuse">Baixa</option>
                    <option style="background-color: yellow">Média</option>
                    <option style="background-color: red">Alta</option>
                </select><br><br>

                Data: <input disabled class="inptModuloAtendente" type="date" value="<?php echo $chamadoSel[1] ?>" name="Ano"><br><br>
                <button  class="btnCadastrar" type="submit"><a href="../Controller/ControleAtenderChamado.php?idchamado=<?php echo $_GET["idchamado"]; ?>">Atender</a></button>
        </div>
      </div>
      </div>
  </body>
  <footer class="footerSi">Desenvolvido pela equipe de estudo de software da Universidade do Estado da Bahia, Campus I, Salvador, BA.</footer>
  <script src="script/jquery-3.4.1.js"></script>
  <script src="script/scriptVictor.js"></script>
</html>