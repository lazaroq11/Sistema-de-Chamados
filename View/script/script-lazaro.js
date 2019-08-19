// Armazenamento de elementos da página -----------------------------------------------------
var botaoConsChamado = $("#btConsChamado");
var inputNumeroChamado = $("#inputNumChamado");
var opAdAdmArea = $("#opAdAdmArea");
var boxAdAdmArea = $("#boxAdAdmArea");
var opAdTec = $("#opAdTec");
var boxAdTec = $("#boxAdTec");
var opAdArea = $("#opAdArea");
var boxAdArea = $("#boxAdArea");
var logoUneb = $("#logoUneb");
var boxAd = $(".boxAd");
var inputAdNomeAdmArea = $("#inputAdNomeAdmArea");
var inputAdCpfAdmArea = $("#inputAdCpfAdmArea");
var inputAdEmailAdmArea = $("#inputAdEmailAdmArea");
var botaoAdicAdmArea = $("#btAicionarAdmGeral");
var lblNomeAdmArea = $("#lblNomeAdmArea");
var lblCpfAdmArea = $("#lblCpfAdmArea");
var lblemailAdmArea = $("#lblemailAdmArea");
var spanErroNome = $("#spanErroNome");
var flagSpanErro = false;

//--------------------------------------------------------------------------------------------

//Validação de campos do formulário ----------------------------------------------------------

btConsChamado.click(function(){
        if(inputNumeroChamado.val() == "" || inputNumChamado.val() == null) {
        inputAdNomeAdmArea.css("box-shadow", "0px 0px 5px 2px red");
        flagSpanErro = true;
}else{
    inputAdNomeAdmArea.css("box-shadow", "none");
    
}

                       }


botaoAdicAdmArea.click(function(){
    if(inputAdNomeAdmArea.val() == "" || inputAdNomeAdmArea.val() == null) {
        inputAdNomeAdmArea.css("box-shadow", "0px 0px 5px 2px red");
        flagSpanErro = true;
       }else
            inputAdNomeAdmArea.css("box-shadow", "none");
       
    
    if(inputAdCpfAdmArea.val() == "" || inputAdCpfAdmArea.val() == null) {
        inputAdCpfAdmArea.css("box-shadow", "0px 0px 5px 2px red");
        flagSpanErro = true;
       }else
           inputAdCpfAdmArea.css("box-shadow", "none");
       
    
    if(inputAdEmailAdmArea.val() == "" || inputAdEmailAdmArea.val() == null) {
        inputAdEmailAdmArea.css("box-shadow", "0px 0px 5px 2px red");
        flagSpanErro = true;
       }else
           inputAdEmailAdmArea.css("box-shadow", "none");
       
    if(flagSpanErro == true){
            spanErroNome.css("display", "block");
            flagSpanErro = false;
       }
        else{
           spanErroNome.css("display", "none");
       }
});

//-------------------------------------------------------------------------------------------


// Transição entre formulários --------------------------------------------------------------

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




