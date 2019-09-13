<!DOCTYPE html>
<html>
    <head>
        <title>ADM Geral</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/styleAure.css">
    </head>
    
    <body>
        
        <div id="MainContainer" class="mainCotainer">
            <a href="https://portal.uneb.br/"><img id="logoUnebCantoEsquerdoSuperior" src="image/LogoUneb.png"></a>
            <div id="logoUnebCantoDireito"></div>
            <div class="divTopo">
                <h1 class="tituloPrincipal">Painel - Administrador Geral</h1>
            </div>  
            
            
            <div class="menuOpcoes">
                <ul class="listaOpcoes">
                    <li id="opAdAdmArea" class="listOpc"><a href="#">Cadastrar Gerente</a></li>
                    <li id="opAdTec" class="listOpc"><a href="#">Cadastrar Técnico</a></li>       
                    <li id="opAdArea" class="listOpc"><a href="#">Cadastrar Setor</a></li>
                    <li  class="listOpcInvers"><a style="color: aliceblue" href="Tabela Gerentes.php">Consultar Gerentes</a></li>
                    <li  class="listOpcInvers"><a style="color: aliceblue" href="Tabela Tecnicos.php">Consultar Técnicos</a></li>
                </ul>
                
                <div id="boxAdAdmArea" class="boxAd">
                    <h2>Cadastro de Gerente</h2>
                    <label id="lblNomeAdmArea" for="inputAdNomeAdmArea">Nome: <input id="inputAdNomeAdmArea" type="text" placeholder="Ex.: Ismael...">
                    </label><br>
                    <label id="lblCpfAdmArea" for="inputAdCpfAdmArea">CPF: <input id="inputAdCpfAdmArea" type="text" placeholder="Ex.: 123.456.789-10..."></label><br>
                    <label id="lblemailAdmArea" for="inputAdEmailAdmArea">E-mail: <input id="inputAdEmailAdmArea" type="text" placeholder="Ex.: email@gmail.com..."></label><br>
                    <label for="selectAdAreaAdmArea">Setor: 
                        <select id="selAdAdmArea" name="selectAdAreaAdmArea">
                            <option value="0">Selecione: </option>
                            <option value="RH">RH</option>
                            <option value="TI">TI</option>
                            <option value="COMUNICACAO">COMUNICAÇÃO</option>
                            <option value="ADMINISTRATIVO">ADMINISTRATIVO</option>
                            <option value="FINANCEIRO">FINANCEIRO</option>
                            <option value="ACADEMICA">ACADÊMICA</option>
                        </select>
                    </label><br>
                    <button id="btAdicionarAdmGeral" class="btnCadastrar" type="submit" >Cadastrar</button><br>
                    <span id="spanErroAdAdmArea" class="spanErro">Por favor, preencha todos os campos...</span><br>
                </div>
                
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
                
                <div id="boxAdArea" class="boxAd">
                    <h2>Cadastro de Setor</h2>
                    <label for="inputAdNomeArea" >Nome do Setor: <input id="inputAdNomeArea" type="text" placeholder="Ex.: Financeiro..."></label><br>
                    <label for="inputAdCodigoArea" >Código do Setor: <input id="inputAdCodigoArea" type="text" placeholder="Ex.: 255464..."></label><br>
                    <label for="inputAdTelefoneArea" >Telefone do Setor: <input id="inputAdTelefoneArea" type="text" placeholder="Ex.: 33478874..."></label><br>
                    <label for="inputAdEmailArea" >Email do Setor: <input id="inputAdEmailArea" type="text" placeholder="Ex.: setor@hotmail.co..."></label><br>
                
                    <button id="btAdDescricaoArea" type="submit" class="btnCadastrar" >Cadastrar</button>
                    <span id="spanErroAdArea" class="spanErro">Por favor, preencha todos os campos...</span><br>
                </div>
                
            </div>
        </div>
        <footer class="footerSi">Desenvolvido pela equipe de estudo de software da Universidade do Estado da Bahia, Campus I, Salvador, BA.</footer>
    </body>
    <script src="script/jquery-3.4.1.js"></script>
    <script src="script/scriptAure.js"></script>
</html>
