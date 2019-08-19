// Armazenamento de elementos da página -----------------------------------------------------

var opAdAdmArea = $("#opAdAdmArea");
var boxAdAdmArea = $("#boxAdAdmArea");
var opAdTec = $("#opAdTec");
var boxAdTec = $("#boxAdTec");
var opAdArea = $("#opAdArea");
var boxAdArea = $("#boxAdArea");
var boxAd = $(".boxAd");

//Variáveis tela Cadastro Adm de Setor -------------
var inputAdNomeAdmArea = $("#inputAdNomeAdmArea");
var inputAdCpfAdmArea = $("#inputAdCpfAdmArea");
var inputAdEmailAdmArea = $("#inputAdEmailAdmArea");
var botaoAdicAdmArea = $("#btAdicionarAdmGeral");
var selAdAdmArea = $("#selAdAdmArea");
var spanErroAdAdmArea = $("#spanErroAdAdmArea");
//--------------------------------------------------

//Variáveis tela Cadastro de Técnico ---------------
var inputAdNomeTec = $("#inputAdNomeTec");
var inputAdCpfTec = $("#inputAdCpfTec");
var inputAdEmailTec = $("#inputAdEmailTec");
var btAdicionarTec = $("#btAdicionarTec");
var selectAdAreaTec = $("#selectAdAreaTec");
var spanErroAdTec = $("#spanErroAdTec");
//--------------------------------------------------

//Variáveis tela Cadastro de Setor ---------------
var inputAdNomeArea = $("#inputAdNomeArea");
var inputAdCodigoArea = $("#inputAdCodigoArea");
var inputAdTelefoneArea = $("#inputAdTelefoneArea");
var spanErroAdArea = $("#spanErroAdArea");
var inputAdEmailArea = $("#inputAdEmailArea");
var btAdDescricaoArea = $("#btAdDescricaoArea");
//--------------------------------------------------

var flagSpanErroAdAdmArea = false;
var flagSpanErroAdTec = false;
var flagSpanErroAdArea = false;
//--------------------------------------------------------------------------------------------

//Validação de campos do formulário Cadastro Adm de Setor ------------------------------------

botaoAdicAdmArea.click(function(){
    if(inputAdNomeAdmArea.val() == "") { 
        inputAdNomeAdmArea.css("box-shadow", "0px 0px 5px 2px rgba(255, 0, 0, 0.6)");
        flagSpanErroAdAdmArea = true;
       }else
            inputAdNomeAdmArea.css("box-shadow", "none");
       
    if(inputAdCpfAdmArea.val() == "") {
        inputAdCpfAdmArea.css("box-shadow", "0px 0px 5px 2px rgba(255, 0, 0, 0.6)");
        flagSpanErroAdAdmArea = true;
       }else
           inputAdCpfAdmArea.css("box-shadow", "none");
       
    
    if(inputAdEmailAdmArea.val() == "") {
        inputAdEmailAdmArea.css("box-shadow", "0px 0px 5px 2px rgba(255, 0, 0, 0.6)");
        flagSpanErroAdAdmArea = true;
       }else
           inputAdEmailAdmArea.css("box-shadow", "none");
    
    if(selAdAdmArea.val() == "0"){
            selAdAdmArea.css("box-shadow", "0px 0px 5px 2px rgba(255, 0, 0, 0.6)");
            flagSpanErroAdAdmArea = true;
       }else
           selAdAdmArea.css("box-shadow", "none");
       
    if(flagSpanErroAdAdmArea == true){
            spanErroAdAdmArea.css("display", "block");
            flagSpanErroAdAdmArea = false;
       }
        else{
           spanErroAdAdmArea.css("display", "none");
            inputAdNomeAdmArea.val("");
            inputAdCpfAdmArea.val("");
            inputAdEmailAdmArea.val("");
            selAdAdmArea.val("0");
            alert("         ---Simulação---\n  Cadastrado com Sucesso!");
       }
});

//-------------------------------------------------------------------------------------------


//Validação de campos do formulário Cadastro de Técnico -------------------------------------

btAdicionarTec.click(function(){
    if(inputAdNomeTec.val() == "") { 
        inputAdNomeTec.css("box-shadow", "0px 0px 5px 2px rgba(255, 0, 0, 0.6)");
        flagSpanErroAdTec = true;
       }else
            inputAdNomeTec.css("box-shadow", "none");
       
    if(inputAdCpfTec.val() == "") {
        inputAdCpfTec.css("box-shadow", "0px 0px 5px 2px rgba(255, 0, 0, 0.6)");
        flagSpanErroAdTec = true;
       }else
           inputAdCpfTec.css("box-shadow", "none");
       
    
    if(inputAdEmailTec.val() == "") {
        inputAdEmailTec.css("box-shadow", "0px 0px 5px 2px rgba(255, 0, 0, 0.6)");
        flagSpanErroAdTec = true;
       }else
           inputAdEmailTec.css("box-shadow", "none");
    
    if(selectAdAreaTec.val() == "0"){
            selectAdAreaTec.css("box-shadow", "0px 0px 5px 2px rgba(255, 0, 0, 0.6)");
            flagSpanErroAdTec = true;
       }else
           selectAdAreaTec.css("box-shadow", "none");
       
    if(flagSpanErroAdTec == true){
            spanErroAdTec.css("display", "block");
            flagSpanErroAdTec = false;
       }
        else{
           spanErroAdTec.css("display", "none");
            inputAdNomeTec.val("");
            inputAdCpfTec.val("");
            inputAdEmailTec.val("");
            selectAdAreaTec.val("0");
            alert("         ---Simulação---\n  Cadastrado com Sucesso!");
       }
});

//-------------------------------------------------------------------------------------------


//Validação de campos do formulário Cadastro de Setor -------------------------------------

btAdDescricaoArea.click(function(){
    if(inputAdNomeArea.val() == "") { 
        inputAdNomeArea.css("box-shadow", "0px 0px 5px 2px rgba(255, 0, 0, 0.6)");
        flagSpanErroAdArea = true;
       }else
            inputAdNomeArea.css("box-shadow", "none");
       
    if(inputAdCodigoArea.val() == "") { 
        inputAdCodigoArea.css("box-shadow", "0px 0px 5px 2px rgba(255, 0, 0, 0.6)");
        flagSpanErroAdArea = true;
       }else
            inputAdCodigoArea.css("box-shadow", "none");
    
    if(inputAdTelefoneArea.val() == "") { 
        inputAdTelefoneArea.css("box-shadow", "0px 0px 5px 2px rgba(255, 0, 0, 0.6)");
        flagSpanErroAdArea = true;
       }else
            inputAdTelefoneArea.css("box-shadow", "none");
    
    if(inputAdEmailArea.val() == "") { 
        inputAdEmailArea.css("box-shadow", "0px 0px 5px 2px rgba(255, 0, 0, 0.6)");
        flagSpanErroAdArea = true;
       }else
            inputAdEmailArea.css("box-shadow", "none");
       
    if(flagSpanErroAdArea == true){
            spanErroAdArea.css("display", "block");
            flagSpanErroAdArea = false;
       }
        else{
           spanErroAdArea.css("display", "none");
            inputAdNomeArea.val("");
            inputAdCodigoArea.val("");
            inputAdTelefoneArea.val("");
            inputAdEmailArea.val(""); 
            alert("         ---Simulação---\n  Cadastrado com Sucesso!");
       }
});

//-------------------------------------------------------------------------------------------


// Verificação de campos na digitação --------------------------------------------------------------------

inputAdNomeAdmArea.keyup(function(){  
    if(inputAdNomeAdmArea.val().trim() != "") { 
        inputAdNomeAdmArea.css("box-shadow", "0px 0px 3px 2px rgba(0, 255, 0, 0.4)");
        inputAdNomeAdmArea.val(inputAdNomeAdmArea.val().trim());
       }else{
           inputAdNomeAdmArea.val("");
           inputAdNomeAdmArea.css("box-shadow", "0px 0px 3px 2px rgba(255, 0, 0, 0.2)");
           flagSpanErroAdAdmArea = true;   
       }
});

inputAdCpfAdmArea.keyup(function(){  
    if(inputAdCpfAdmArea.val().trim() != "") { 
        inputAdCpfAdmArea.css("box-shadow", "0px 0px 3px 2px rgba(0, 255, 0, 0.4)");
        inputAdCpfAdmArea.val(inputAdCpfAdmArea.val().trim());
       }else{
           inputAdCpfAdmArea.val("");
           inputAdCpfAdmArea.css("box-shadow", "0px 0px 5px 2px rgba(255, 0, 0, 0.2)");
            flagSpanErroAdAdmArea = true;   
       }
});

inputAdEmailAdmArea.keyup(function(){  
    if(inputAdEmailAdmArea.val().trim() != "") { 
        inputAdEmailAdmArea.css("box-shadow", "0px 0px 5px 2px rgba(0, 255, 0, 0.4)");
        inputAdEmailAdmArea.val(inputAdEmailAdmArea.val().trim());
       }else{
           inputAdEmailAdmArea.val("");
           inputAdEmailAdmArea.css("box-shadow", "0px 0px 5px 2px rgba(255, 0, 0, 0.2)");
            flagSpanErroAdAdmArea = true;   
       }
});

selAdAdmArea.click(function(){
    if(selAdAdmArea.val() != "0"){
            selAdAdmArea.css("box-shadow", "0px 0px 3px 2px rgba(0, 0, 255, 0.1)");
       }
});
   

//----------------------------------------------//

inputAdNomeTec.keyup(function(){  
    if(inputAdNomeTec.val().trim() != "") { 
        inputAdNomeTec.css("box-shadow", "0px 0px 3px 2px rgba(0, 255, 0, 0.4)");
        inputAdNomeTec.val(inputAdNomeTec.val().trim());
       }else{
           inputAdNomeTec.val("");
           inputAdNomeTec.css("box-shadow", "0px 0px 3px 2px rgba(255, 0, 0, 0.2)");
           flagSpanErroAdTec = true;   
       }
});

inputAdCpfTec.keyup(function(){  
    if(inputAdCpfTec.val().trim() != "") { 
        inputAdCpfTec.css("box-shadow", "0px 0px 3px 2px rgba(0, 255, 0, 0.4)");
        inputAdCpfTec.val(inputAdCpfTec.val().trim());
       }else{
           inputAdCpfTec.val("");
           inputAdCpfTec.css("box-shadow", "0px 0px 3px 2px rgba(255, 0, 0, 0.2)");
           flagSpanErroAdTec = true;   
       }
});

inputAdEmailTec.keyup(function(){  
    if(inputAdEmailTec.val().trim() != "") { 
        inputAdEmailTec.css("box-shadow", "0px 0px 3px 2px rgba(0, 255, 0, 0.4)");
        inputAdEmailTec.val(inputAdEmailTec.val().trim());
       }else{
           inputAdEmailTec.val("");
           inputAdEmailTec.css("box-shadow", "0px 0px 3px 2px rgba(255, 0, 0, 0.2)");
           flagSpanErroAdTec = true;   
       }
});

selectAdAreaTec.click(function(){
    if(selectAdAreaTec.val() != "0"){
            selectAdAreaTec.css("box-shadow", "0px 0px 3px 2px rgba(0, 0, 255, 0.1)");
       }
});

//----------------------------------------------//

inputAdNomeArea.keyup(function(){  
    if(inputAdNomeArea.val().trim() != "") { 
        inputAdNomeArea.css("box-shadow", "0px 0px 3px 2px rgba(0, 255, 0, 0.4)");
        inputAdNomeArea.val(inputAdNomeArea.val().trim());
       }else{
           inputAdNomeArea.val("");
           inputAdNomeArea.css("box-shadow", "0px 0px 3px 2px rgba(255, 0, 0, 0.2)");
           flagSpanErroAdArea = true;   
       }
});

inputAdCodigoArea.keyup(function(){  
    if(inputAdCodigoArea.val().trim() != "") { 
        inputAdCodigoArea.css("box-shadow", "0px 0px 3px 2px rgba(0, 255, 0, 0.4)");
        inputAdCodigoArea.val(inputAdCodigoArea.val().trim());
       }else{
           inputAdCodigoArea.val("");
           inputAdCodigoArea.css("box-shadow", "0px 0px 3px 2px rgba(255, 0, 0, 0.2)");
           flagSpanErroAdArea = true;   
       }
});

inputAdTelefoneArea.keyup(function(){  
    if(inputAdTelefoneArea.val().trim() != "") { 
        inputAdTelefoneArea.css("box-shadow", "0px 0px 3px 2px rgba(0, 255, 0, 0.4)");
        inputAdTelefoneArea.val(inputAdTelefoneArea.val().trim());
       }else{
           inputAdTelefoneArea.val("");
           inputAdTelefoneArea.css("box-shadow", "0px 0px 3px 2px rgba(255, 0, 0, 0.2)");
           flagSpanErroAdArea = true;   
       }
});

inputAdTelefoneArea.keyup(function(){  
    if(inputAdTelefoneArea.val().trim() != "") { 
        inputAdTelefoneArea.css("box-shadow", "0px 0px 3px 2px rgba(0, 255, 0, 0.4)");
        inputAdTelefoneArea.val(inputAdTelefoneArea.val().trim());
       }else{
           inputAdTelefoneArea.val("");
           inputAdTelefoneArea.css("box-shadow", "0px 0px 3px 2px rgba(255, 0, 0, 0.2)");
           flagSpanErroAdArea = true;   
       }
});



//---------------------------------------------------------------------------------------------

// Transição entre formulários ----------------------------------------------------------------

opAdAdmArea.click(function(){
    boxAdArea.fadeOut(function(){
        boxAdArea.css("display", "none");
    });
    
    boxAdTec.fadeOut(function(){
        boxAdTec.css("display", "none");
    });
    
    boxAdAdmArea.fadeIn(function(){
        boxAdAdmArea.css("display", "block");
    });   
});


    
opAdTec.click(function(){
    boxAdArea.fadeOut(function(){
        boxAdArea.css("display", "none");
    });
    
    boxAdAdmArea.fadeOut(function(){
        boxAdAdmArea.css("display", "none");
    });
    boxAdTec.fadeIn(function(){
        boxAdTec.css("display", "block");
    });
});


    
opAdArea.click(function(){
    boxAdAdmArea.fadeOut(function(){
        boxAdAdmArea.css("display", "none");
    });
    
    boxAdTec.fadeOut(function(){
        boxAdTec.css("display", "none");
    });
    
    boxAdArea.fadeIn(function(){
        boxAdArea.css("display", "block");
    });
});


//-------------------------------------------------------------------------------------------




