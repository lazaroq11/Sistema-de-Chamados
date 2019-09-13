﻿<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/styleVictor.css">
    <meta charset="utf-8">
  </head>
  
  <body>
	<div id="MainContainer" class="mainCotainer">
        <a href="https://portal.uneb.br/"><img id="logoUnebCantoEsquerdoSuperior" src="image/LogoUneb.png"></a>
        <div id="logoUnebCantoDireito"></div>
	    <div class="divTopo">
            <h1 class="tituloPrincipal">Login</h1>
        </div>
        <div class="menuOpcoesLogin">
                    <ul class="listaOpcoes">
                         <li class="listOpc"><a href="Chamada.php">Abertura de Chamado</a></li>
                         <li class="listOpc"><a href="Alterar.php">Alteração de Chamado</a></li>
                         <li class="listOpc"><a href="Busca.php">Buscar Chamado</a></li>
                    </ul>
			<div id="login" class="usuario">
                Usuário:
                <input id="inptUser" type="text" name="User">
                <br>
                Senha:
                <input id="inptSenha" type="password" name="Senha">
                <br><br>
                <button id="btnLogin" class="btnCadastrar" style="height: 25%" type="submit">Logar</button>
                <span id="spanErroLogin" class="spanErro">Por favor, preencha todos os campos...</span><br>

            </div>
        </div>
    </div>
      <footer class="footerSi">Desenvolvido pela equipe de estudo de software da Universidade do Estado da Bahia, Campus I, Salvador, BA.</footer>
    </body>
    <script src="script/jquery-3.4.1.js"></script>
  <script src="script/scriptVictor.js"></script>
</html>