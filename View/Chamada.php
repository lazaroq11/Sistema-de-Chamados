﻿<!DOCTYPE html>
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
                    <li class="listOpc"><a href="Alterar.php">Alteração de Chamado</a></li>
                    <li class="listOpc"><a href="Busca.php">Busca de Chamado</a></li>
                    <li class="listOpc"><a href="Login.php">Login</a></li>
                </ul>
                <div id="chamada" class="usuario">
                  *Solicitante:
                        <input class="inptTelaChamado" id="inptSolicitante"  type="text" name="Numero"><br>

                    *Setor:
                        <input class="inptTelaChamado" id="inptSetor" type="text" name="Numero"><br>

                    *E-mail:
                        <input class="inptTelaChamado" id="inptEmail" type="text" name="Numero"><br>

                    *Telefone:
                        <input class="inptTelaChamado" id="inptTelefone" type="text" name="Numero"><br>

                    *Ramal:
                        <input class="inptTelaChamado" id="inptRamal" type="text" name="Numero"><br>

                    *Problema:
                    <select id="selSelectProblema" name="equipamento">
                        <option value="0">Selecione: </option>
                        <option value="outro">OUTROS (Especificar)</option>
                        <option value="mouse">Mouse</option>
                        <option value="monitor">Monitor</option>
                        <option value="teclado">Teclado</option>
                    </select><br>

                    Imagem: <button id="btnEnviarImg" class="btnCadastrar" >Escolher arquivo</button><br><br>	
                    Observações:<br>
                    <textarea id="txtObs" name="nome" rows="5" cols="50"></textarea><br><br>
                    <button id="btnCadastro" class="btnCadastrar" type="submit">Enviar</button>
                    <button class="btnCadastrar" type="reset">Cancelar</button><br>
                    <span id="spanErroAdChamado" class="spanErro">Por favor, preencha todos os campos...</span><br>
                </div>
            </div>
          </div>
    </body>
    <footer class="footerSi">Desenvolvido pela equipe de estudo de software da Universidade do Estado da Bahia, Campus I, Salvador, BA.</footer>
    <script src="script/jquery-3.4.1.js"></script>
    <script src="script/scriptVictor.js"></script>
</html>