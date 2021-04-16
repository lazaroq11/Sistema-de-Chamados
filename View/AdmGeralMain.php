<?php
require_once "../Model/Setor.php";
session_start();
$setor = new Setor();
$setor->getListaSetor();
$setores = $setor->getLista();
$quantSetores = count($setores);
?>
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
                    <li class="listOpc"><a href="Login.php">Logout</a></li>
                    <li  class="listOpcInvers"><a style="color: aliceblue" href="Tabela Gerentes.php">Consultar Gerentes</a></li>
                    <li  class="listOpcInvers"><a style="color: aliceblue" href="Tabela Tecnicos.php">Consultar Técnicos</a></li>
                </ul>
                
                <div id="boxAdAdmArea" class="boxAd">
                    <form name="formCadastroAdmArea" action="../Controller/ControladorAdmGeral.php" method="post" >
                        <h2>Cadastro de Gerente</h2>
                        <label id="lblNomeAdmArea" for="inputAdNomeAdmArea">Nome: <input id="inputAdNomeAdmArea" name="nomeGerente" maxlength="45" type="text" placeholder="Ex.: Ismael...">
                        </label><br>
                        <label id="lblCpfAdmArea" for="inputAdCpfAdmArea">CPF: <input id="inputAdCpfAdmArea" name="CpfGerente" maxlength="12" type="number" placeholder="Ex.: 123.456.789-10..."></label><br>
                        <label id="lblemailAdmArea" for="inputAdEmailAdmArea">E-mail: <input id="inputAdEmailAdmArea" name="EmailGerente" maxlength="45" type="text" placeholder="Ex.: email@gmail.com..."></label><br>
                        <label id="lblTelAdAdmArea" for="inputAdTelAdmArea">Telefone: <input id="inputAdTelAdmArea" name="TelefoneGerente" maxlength="15" type="number" placeholder="Ex.: 33588745"></label><br>
                        <label for="selectAdAreaAdmArea">Setor:
                            <select id="selAdAdmArea" name="selectAdAreaAdmArea">
                                <option value="0">Selecione: </option>
                                <?php for($i=0;$i<$quantSetores;$i++){ ?>
                                <option value="<?php echo $setores[$i][0]; ?>"><?php echo $setores[$i][1];?></option> <?php } ?>
                            </select>
                        </label><br>
                        <input type="hidden" name="tipoCadastro" value="gerente" >
                        <button id="btAdicionarAdmGeral" class="btnCadastrar" value="IncluirAdm"  type="submit" >Cadastrar</button><br>
                        <span id="spanErroAdAdmArea" class="spanErro">Por favor, preencha todos os campos...</span><br>
                    </form>
                </div>

                <div id="boxAdTec" class="boxAd">
                    <form name="formCadastroTec" action="../Controller/ControladorAdmGeral.php" method="post" >
                        <h2>Cadastro de Técnico</h2>
                        <label for="inputAdNomeTec">Nome: <input id="inputAdNomeTec" name="nomeTec" type="text" placeholder="Ex.: Ismael..."></label><br>
                        <label for="inputAdCpfTec">CPF: <input id="inputAdCpfTec" name="CpfTec" maxlength="11" type="number" placeholder="Ex.: 123.456.789-10..."></label><br>
                        <label for="inputAdEmailTec">E-mail: <input id="inputAdEmailTec" name="EmailTec" type="text" placeholder="Ex.: email@gmail.com..."></label><br>
                        <label id="lblTelAdTec" for="inputAdTelTec">Telefone: <input id="inputAdTelTec" name="TelefoneTec" maxlength="11" type="number" placeholder="Ex.: 33588745"></label><br>
                        <label for="SelectAdAreaTec">Setor:
                            <select id="selectAdAreaTec" name="SelectAdAreaTec">
                                <option value="0">Selecione: </option>
                                <?php for($i=0;$i<$quantSetores;$i++){ ?>
                                <option value="<?php echo $setores[$i][0]; ?>"><?php echo $setores[$i][1];?></option> <?php } ?>
                            </select>
                        </label><br>
                        <input type="hidden" name="tipoCadastro" value="tecnico" >
                        <button id="btAdicionarTec" type="submit" value="IncluirTec" class="btnCadastrar">Cadastrar</button>
                        <span id="spanErroAdTec" class="spanErro">Por favor, preencha todos os campos...</span><br>
                    </form>
                </div>
                
                <div id="boxAdArea" class="boxAd">
                    <form name="formCadastroSetor" action="../Controller/ControladorAdmGeral.php" method="post" >
                        <h2>Cadastro de Setor</h2>
                        <label for="inputAdNomeArea" >Nome do Setor: <input id="inputAdNomeArea" maxlength="45" type="text" placeholder="Ex.: Financeiro..." name="nomeSetor" /></label><br>
                        <label for="inputAdCodigoArea" >Código do Setor: <input id="inputAdCodigoArea" maxlength="11" type="number" placeholder="Ex.: 255464..." name="codigoSetor" /></label><br>
                        <label for="inputAdTelefoneArea" >Telefone do Setor: <input id="inputAdTelefoneArea" maxlength="11" type="number" placeholder="Ex.: 33478874..." name="telefoneSetor" /></label><br>
                        <label for="inputAdEmailArea" >Email do Setor: <input id="inputAdEmailArea" maxlength="45" type="text" placeholder="Ex.: setor@hotmail.co..." name="emailSetor" /></label><br>
                        <input type="hidden" name="tipoCadastro" value="setor" id="tipoCadastro" >

                        <button id="btAdDescricaoArea" type="submit" value="IncluirSetor" class="btnCadastrar" >Cadastrar</button>
                        <span id="spanErroAdArea" class="spanErro">Por favor, preencha todos os campos...</span><br>
                    </form>
                </div>
                
            </div>
        </div>
        <footer class="footerSi">Desenvolvido pela equipe de estudo de software da Universidade do Estado da Bahia, Campus I, Salvador, BA.</footer>
    </body>
    <script src="script/jquery-3.4.1.js"></script>
    <script src="script/scriptAure.js"></script>
</html>
