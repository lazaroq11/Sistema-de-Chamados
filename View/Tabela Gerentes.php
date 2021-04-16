<?php
require_once "../Model/Setor.php";
require_once "../Model/Gerente.php";
session_start();
$setor = new Setor();
$setor->getListaSetor();
$setores = $setor->getLista();
$quantSetores = count($setores);
$gerente = new Gerente();
$gerente->getListaGerente();
$gerentes = $gerente->getList();
$quantGerentes = count($gerentes);
?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Gerentes</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style-lazaro.css">
  
  </head>
    
    
  <body>
      
        <div id="MainContainer" class="mainContainer">
       
        <a href="https://portal.uneb.br/"><img id="logoUnebCantoEsquerdoSuperior" src="image/LogoUneb.png"></a>
            <div id="logoUnebCantoDireito"></div>                                                                                            
            <div class="divTopo">
                <h1 class="tituloPrincipal">Tabela - Gerentes</h1>
            </div> 
      
      
     
      <div id="navbar" class="navbar">
   
      <ul>
        <li class="listOpc"><a href="AdmGeralMain.php">Voltar</a></li>
      <li class="listOpc"><a href="Login.php">Logout</a></li>
        </ul>
   </div>
       <div id="boxAdAdmArea" class="boxAd">
     
           <h2 id="subtitulo2">Gerentes</h2>
           <div id="table" class="table" style="position: absolute; left:85%; border-radius: 15px ">
                <table cellpadding="10" cellspacing="25" border="1"  >
                   <tr>
                        <th style="border-radius: 15px; text-shadow: black 1px 1px 1px">Nome</th>
                        <th style="border-radius: 15px; text-shadow: black 1px 1px 1px">Telefone</th>
                        <th style="border-radius: 15px; text-shadow: black 1px 1px 1px">Setor</th>
                        <th style="border-radius: 15px; text-shadow: black 1px 1px 1px">CPF</th>
                   </tr>
                    <?php for ($i=0;$i<$quantGerentes;$i++) {?>
                   <tr>
                       <td><?php echo $gerentes[$i][2] ?></td>
                       <td><?php echo $gerentes[$i][6] ?></td>
                       <td><?php echo $gerentes[$i][4] ?></td>
                       <td><?php echo $gerentes[$i][1] ?></td>
                   </tr><?php }?>
               </table>
          </div>
      </div>
  </body>
     <footer class="footerSi">Desenvolvido pela equipe de estudo de software da Universidade do Estado da Bahia, Campus I, Salvador, BA.</footer>
    <script src="script.js"></script>
</html>