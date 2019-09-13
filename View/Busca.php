<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Busca de Chamado</title>
	<link rel="stylesheet" type="text/css" href="css/styleVictor.css">
    <meta charset="utf-8">
  </head>
  
    <body>
  
      <div id="MainContainer" class="mainCotainer">
        <a href="https://portal.uneb.br/"><img id="logoUnebCantoEsquerdoSuperior" src="image/LogoUneb.png"></a>
        <div id="logoUnebCantoDireito"></div>
        <div class="divTopo">
            <h1 class="tituloPrincipal">Busca de Chamado</h1>
        </div>
        <div class="menuOpcoesBuscaChamado">
            <ul class="listaOpcoes">
                 <li class="listOpc"><a href="Alterar.php">Alteração de Chamado</a></li>
                 <li class="listOpc"><a href="Chamada.php">Abertura de Chamado</a></li>
                 <li class="listOpc"><a href="Login.php">Login</a></li>
            </ul>
            <div id="login" class="usuario">
                Tipo de Chamado: 
                <select>
                    <option>Número Chamado</option>
                    <option>Solicitante</option>
                    <option>Setor</option>
                </select><br>
                <input  type="number" name="dado">
                <button  class="btnBuscaChamado" type="submit" >Consultar Chamado</button><br><br>
                Inicia em:
                <input  type="date" name="inicia"><br>
                Termina em:
                <input   type="date" name="termina"><br>
                <button  class="btnBuscaChamado" type="submit" >Consultar Período</button><br><hr><br><br>
                <button  class="btnBuscaChamado" type="submit" >Buscar</button>
            </div>
        </div>
    </div>
  </body>
  <script src="script/jquery-3.4.1.js"></script>
  <script src="script/scriptVictor.js"></script>
</html>