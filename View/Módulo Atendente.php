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
                 <li class="listOpc"><a href="Login.php">Logout </a></li>
             </ul>

            <div id="chamada" class="usuario">

                Número do chamado:
                <input disabled class="inptModuloAtendente" type="text" name="Numero">
                <br>
                Solicitante:
                <input disabled class="inptModuloAtendente" type="text" name="Solicitante">
                <br>
                Setor:
                <input disabled class="inptModuloAtendente" type="texto" name="Setor">
                <br>
                Email:
                <input disabled class="inptModuloAtendente" type="text" name="Email" size="50" maxlength="100">
                <br>
                Ramal:
                <input disabled class="inptModuloAtendente" type="text" name="Ramal">
                <br>
                Telefone:
                <input disabled class="inptModuloAtendente" type="texto" name="Telefone">
                <br>
                Equipamento:
                <input disabled class="inptModuloAtendente" type="texto" name="Equip"size="50" maxlength="100">
                <br>
                Defeito:
                <input disabled class="inptModuloAtendente" type="texto" name="Defeito" size="50" maxlength="100">
                <br><br>

                <a href="#">Ver imagem</a><br><br>

                Observações: <br>
                <textarea class="txtModuloAtendente" disabled name="nome" placeholder="Não consegue acessar sua conta no hotmail..." rows="2" cols="20"></textarea><br>

                Prioridade:
                <select name="prioridade">
                    <option style="background-color: chartreuse">Baixa</option>
                    <option style="background-color: yellow">Média</option>
                    <option style="background-color: red">Alta</option>
                </select><br><br>

                Situações:<br>
                <textarea class="txtModuloAtendente" disabled name="nome" rows="2" cols="20"></textarea><br>

                Hora do chamado: <input disabled class="inptModuloAtendente" type="time" name="Hora" size="50" maxlength="100"><br>
                Data: <input disabled class="inptModuloAtendente" type="date" name="Ano"><br><br>
                <button  class="btnCadastrar" type="submit">Atender</button>
        </div>
      </div>
      </div>
  </body>
  <footer class="footerSi">Desenvolvido pela equipe de estudo de software da Universidade do Estado da Bahia, Campus I, Salvador, BA.</footer>
  <script src="script/jquery-3.4.1.js"></script>
  <script src="script/scriptVictor.js"></script>
</html>