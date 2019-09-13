<!DOCTYPE html>
<html>
    <head>
        <title>GerenteMain</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/styleAure.css">
    </head>
    
    <body>
        
        <div id="MainContainer" class="mainCotainer">
            <a href="https://portal.uneb.br/"><img id="logoUnebCantoEsquerdoSuperior" src="image/LogoUneb.png"></a>
            <div id="logoUnebCantoDireito"></div>
            <div class="divTopo">
                <h1 class="tituloPrincipal">Painel - Gerente</h1>
            </div>  
            
            
            <div class="menuOpcoes">
                <ul class="listaOpcoes">
                    <li id="opAdTec" class="listOpc"><a href="#">Cadastrar Técnico</a></li>
                    <li id="opAdArea" class="listOpc"><a href="Tabela%20Tecnicos.html">Consultar Técnicos</a></li>
                    
                    
                </ul>
                
                <div id="boxAdTec" class="boxAd">
                    <h2>Cadastro de Técnico</h2>
                    <label for="inputAdNomeTec">Nome: <input id="inputAdNomeTec" type="text" placeholder="Ex.: Ismael..."></label><br>
                    <label for="inputAdCpfTec">CPF: <input id="inputAdCpfTec" type="text" placeholder="Ex.: 123.456.789-10..."></label><br>
                    <label for="inputAdEmailTec">E-mail: <input id="inputAdEmailTec" type="text" placeholder="Ex.: email@gmail.com..."></label><br>
                    <label for="SelectAdAreaTec">Setor: 
                        <select id="selectAdAreaTec" name="SelectAdAreaTec">
                            <option value="0">Selecione: </option>
                            <option value="RH">RH</option>
                            <option value="TI">TI</option>
                            <option value="COMUNICACAO">COMUNICAÇÃO</option>
                            <option value="ADMINISTRATIVO">ADMINISTRATIVO</option>
                            <option value="FINANCEIRO">FINANCEIRO</option>
                            <option value="ACADEMICA">ACADÊMICA</option>
                        </select>
                    </label><br>
                    <button id="btAdicionarTec" type="submit" class="btnCadastrar">Cadastrar</button>
                    <span id="spanErroAdTec" class="spanErro">Por favor, preencha todos os campos...</span><br>
                </div>
                
                
                
            </div>
        </div>
        <footer class="footerSi">Desenvolvido pela equipe de estudo de software da Universidade do Estado da Bahia, Campus I, Salvador, BA.</footer>
    </body>
    <script src="script/jquery-3.4.1.js"></script>
    <script src="script/scriptAure.js"></script>
</html>
