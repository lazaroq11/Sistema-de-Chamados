<?php
require "../Model/Setor.php";
session_start();
$setor = new Setor();
$setor->getListaSetor();
$setores = $setor->getLista();
$quantSetores = count($setores);
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="stylesheet" type="text/css" href="css/styleVictor.css">
    <center><img src="uneblogo.jpeg" alt="logo" ></center>
    <title>Chamada </title>   
  </head>
    <body> 
        <div id="MainContainer" class="mainCotainer">
            <a href="https://portal.uneb.br/"><img id="logoUnebCantoEsquerdoSuperior" src="image/LogoUneb.png"></a>
            <div id="logoUnebCantoDireito"></div>
            <div class="divTopo">
                <h1 class="tituloPrincipal">Abertura de Chamado</h1>
            </div>
            <div class="menuOpcoesChamado">
                <ul class="listaOpcoes">
                    <li class="listOpc"><a href="Busca.php">Busca de Chamado</a></li>
                    <li class="listOpc"><a href="Login.php">Login</a></li>
                </ul>
                <div id="chamada" class="usuario">
                  <form method="post" action="../Controller/ControladorAberturaChamado.php">
                      *Solicitante:
                            <input class="inptTelaChamado" placeholder="Nome..." id="inptSolicitante" maxlength="50"  type="text" name="nome"><br>

                      *CPF:
                      <input class="inptTelaChamado" placeholder="Ex.: 03997887414" id="inptCPF" maxlength="11"  type="number" name="cpf"><br><br>

                        <label for="inptSetor">*Setor:
                            <select id="inptSetor" name="SelectAdAreaTec">
                                <option value="0">Selecione: </option>
                                <?php for($i=0;$i<$quantSetores;$i++){ ?>
                                    <option value="<?php echo $setores[$i][0]; ?>"><?php echo $setores[$i][1];?></option> <?php } ?>
                            </select>
                        </label><br>

                        *E-mail:
                            <input class="inptTelaChamado" placeholder="exemplo@exemplo..." id="inptEmail" type="text" name="email"><br>

                        *Telefone:
                            <input class="inptTelaChamado" placeholder="Ex.: 33654787..." id="inptTelefone" type="number" name="telefone"><br>

                        *Problema:
                        <select id="selSelectProblema" name="problema">
                            <option value="0">Selecione: </option>
                            <option value="outro">OUTROS (Especificar)</option>
                            <option value="mouse">Mouse</option>
                            <option value="monitor">Monitor</option>
                            <option value="teclado">Teclado</option>
                            <option value="isoft">Instalação de Software</option>
                        </select><br>

                        Imagem: <button id="btnEnviarImg" class="btnCadastrar" >Escolher arquivo</button><br><br>
                        Descrição:<br>
                        <textarea id="txtObs" placeholder="Informe os detalhes..." name="descricao" rows="5" cols="60"></textarea><br><br>
                        <input type="hidden" name="formul" >
                        <button id="btnCadastro" class="btnCadastrar" type="submit">Enviar</button>
                        <button class="btnCadastrar" type="reset">Cancelar</button><br>
                        <span id="spanErroAdChamado" class="spanErro">Por favor, preencha todos os campos...</span><br>
                  </form>
                </div>
            </div>
          </div>
    </body>
    <footer class="footerSi">Desenvolvido pela equipe de estudo de software da Universidade do Estado da Bahia, Campus I, Salvador, BA.</footer>
    <script src="script/jquery-3.4.1.js"></script>
    <script src="script/scriptVictor.js"></script>
</html>