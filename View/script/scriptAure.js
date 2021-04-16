// Armazenamento de elementos da página -----------------------------------------------------

var opAdAdmArea = $("#opAdAdmArea");
var boxAdAdmArea = $("#boxAdAdmArea");
var opAdTec = $("#opAdTec");
var boxAdTec = $("#boxAdTec");
var opAdArea = $("#opAdArea");
var boxAdArea = $("#boxAdArea");

//Variáveis tela Cadastro Adm de Setor -------------
var inputAdNomeAdmArea = $("#inputAdNomeAdmArea");
var inputAdCpfAdmArea = $("#inputAdCpfAdmArea");
var inputAdEmailAdmArea = $("#inputAdEmailAdmArea");
var botaoAdicAdmArea = $("#btAdicionarAdmGeral");
var selAdAdmArea = $("#selAdAdmArea");
var spanErroAdAdmArea = $("#spanErroAdAdmArea");
var inputAdTelAdmArea = $("#inputAdTelAdmArea");
//--------------------------------------------------

//Variáveis tela Cadastro de Técnico ---------------
var inputAdNomeTec = $("#inputAdNomeTec");
var inputAdCpfTec = $("#inputAdCpfTec");
var inputAdEmailTec = $("#inputAdEmailTec");
var btAdicionarTec = $("#btAdicionarTec");
var selectAdAreaTec = $("#selectAdAreaTec");
var spanErroAdTec = $("#spanErroAdTec");
var inputAdTelTec = $("#inputAdTelTec");
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

var atenderr = $("#atenderr");

atenderr.click(function () {
    var valor = $(this).attr('value');
    $.ajax ({
        type: "POST",
        url: "..Controller/ControleDirectAtenderChamado.php?Key=" + valor,
        data: datastring
    })
});

function validaCadastroSetor(){
    return false;
}

//Validação de campos do formulário Cadastro Adm de Setor ------------------------------------

botaoAdicAdmArea.click(function(event){
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

    if(inputAdTelAdmArea.val() == "") {
        inputAdTelAdmArea.css("box-shadow", "0px 0px 5px 2px rgba(255, 0, 0, 0.6)");
        flagSpanErroAdAdmArea = true;
    }else
        inputAdTelAdmArea.css("box-shadow", "none");

    if(selAdAdmArea.val() == "0"){
            selAdAdmArea.css("box-shadow", "0px 0px 5px 2px rgba(255, 0, 0, 0.6)");
            flagSpanErroAdAdmArea = true;
       }else
           selAdAdmArea.css("box-shadow", "none");

    if(flagSpanErroAdAdmArea == true){
            spanErroAdAdmArea.css("display", "block");
            flagSpanErroAdAdmArea = false;
            event.preventDefault();
       }
        else{
           spanErroAdAdmArea.css("display", "none");
            $(this).html("Registrando..");
       }
});

//-------------------------------------------------------------------------------------------


//Validação de campos do formulário Cadastro de Técnico -------------------------------------

btAdicionarTec.click(function(event){
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

    if(inputAdTelTec.val() == "") {
        inputAdTelTec.css("box-shadow", "0px 0px 5px 2px rgba(255, 0, 0, 0.6)");
        flagSpanErroAdTec = true;
    }else
        inputAdTelTec.css("box-shadow", "none");
    
    if(selectAdAreaTec.val() == "0"){
            selectAdAreaTec.css("box-shadow", "0px 0px 5px 2px rgba(255, 0, 0, 0.6)");
            flagSpanErroAdTec = true;
       }else
           selectAdAreaTec.css("box-shadow", "none");
       
    if(flagSpanErroAdTec == true){
            spanErroAdTec.css("display", "block");
            flagSpanErroAdTec = false;
            event.preventDefault();
       }
        else{
           spanErroAdTec.css("display", "none");
            $(this).html("Registrando..");
    }
});

//-------------------------------------------------------------------------------------------


//Validação de campos do formulário Cadastro de Setor -------------------------------------

btAdDescricaoArea.click( function(event){
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
            event.preventDefault();
       }
        else{
           spanErroAdArea.css("display", "none");
            $(this).html("Registrando..");
       }
});

//-------------------------------------------------------------------------------------------


// Verificação de campos na digitação --------------------------------------------------------------------

inputAdNomeAdmArea.keyup(function(){  
    if(inputAdNomeAdmArea.val().trim() != "") { 
        inputAdNomeAdmArea.css("box-shadow", "0px 0px 3px 2px rgba(0, 255, 0, 0.4)");
       }else
           inputAdNomeAdmArea.css("box-shadow", "0px 0px 3px 2px rgba(255, 0, 0, 0.2)");

});

inputAdCpfAdmArea.keyup(function(){  
    if(inputAdCpfAdmArea.val().trim() != "") { 
        inputAdCpfAdmArea.css("box-shadow", "0px 0px 3px 2px rgba(0, 255, 0, 0.4)");
        inputAdCpfAdmArea.val(inputAdCpfAdmArea.val().trim());
       }else
           inputAdCpfAdmArea.css("box-shadow", "0px 0px 5px 2px rgba(255, 0, 0, 0.2)");

});

inputAdEmailAdmArea.keyup(function(){  
    if(inputAdEmailAdmArea.val().trim() != "") { 
        inputAdEmailAdmArea.css("box-shadow", "0px 0px 3px 2px rgba(0, 255, 0, 0.4)");
        inputAdEmailAdmArea.val(inputAdEmailAdmArea.val().trim());
       }else
           inputAdEmailAdmArea.css("box-shadow", "0px 0px 5px 2px rgba(255, 0, 0, 0.2)");

});

inputAdTelAdmArea.keyup(function(){
    if(inputAdTelAdmArea.val().trim() != "") {
        inputAdTelAdmArea.css("box-shadow", "0px 0px 3px 2px rgba(0, 255, 0, 0.4)");
        inputAdTelAdmArea.val(inputAdTelAdmArea.val().trim());
    }else
        inputAdTelAdmArea.css("box-shadow", "0px 0px 5px 2px rgba(255, 0, 0, 0.2)");

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
       }else
           inputAdNomeTec.css("box-shadow", "0px 0px 3px 2px rgba(255, 0, 0, 0.2)");

});

inputAdCpfTec.keyup(function(){  
    if(inputAdCpfTec.val().trim() != "") { 
        inputAdCpfTec.css("box-shadow", "0px 0px 3px 2px rgba(0, 255, 0, 0.4)");
        inputAdCpfTec.val(inputAdCpfTec.val().trim());
       }else
           inputAdCpfTec.css("box-shadow", "0px 0px 3px 2px rgba(255, 0, 0, 0.2)");

});

inputAdEmailTec.keyup(function(){  
    if(inputAdEmailTec.val().trim() != "") { 
        inputAdEmailTec.css("box-shadow", "0px 0px 3px 2px rgba(0, 255, 0, 0.4)");
        inputAdEmailTec.val(inputAdEmailTec.val().trim());
       }else
           inputAdEmailTec.css("box-shadow", "0px 0px 3px 2px rgba(255, 0, 0, 0.2)");

});

inputAdTelTec.keyup(function(){
    if(inputAdTelTec.val().trim() != "") {
        inputAdTelTec.css("box-shadow", "0px 0px 3px 2px rgba(0, 255, 0, 0.4)");
        inputAdTelTec.val(inputAdTelTec.val().trim());
    }else
        inputAdTelTec.css("box-shadow", "0px 0px 3px 2px rgba(255, 0, 0, 0.2)");

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
       }else
           inputAdNomeArea.css("box-shadow", "0px 0px 3px 2px rgba(255, 0, 0, 0.2)");
});

inputAdCodigoArea.keyup(function(){  
    if(inputAdCodigoArea.val().trim() != "") { 
        inputAdCodigoArea.css("box-shadow", "0px 0px 3px 2px rgba(0, 255, 0, 0.4)");
        inputAdCodigoArea.val(inputAdCodigoArea.val().trim());
       }else
           inputAdCodigoArea.css("box-shadow", "0px 0px 3px 2px rgba(255, 0, 0, 0.2)");
});

inputAdTelefoneArea.keyup(function(){  
    if(inputAdTelefoneArea.val().trim() != "") { 
        inputAdTelefoneArea.css("box-shadow", "0px 0px 3px 2px rgba(0, 255, 0, 0.4)");
        inputAdTelefoneArea.val(inputAdTelefoneArea.val().trim());
       }else
           inputAdTelefoneArea.css("box-shadow", "0px 0px 3px 2px rgba(255, 0, 0, 0.2)");
});

inputAdEmailArea.keyup(function(){
    if(inputAdEmailArea.val().trim() != "") {
        inputAdEmailArea.css("box-shadow", "0px 0px 3px 2px rgba(0, 255, 0, 0.4)");
        inputAdEmailArea.val(inputAdEmailArea.val().trim());
    }else
        inputAdEmailArea.css("box-shadow", "0px 0px 3px 2px rgba(255, 0, 0, 0.2)");
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


