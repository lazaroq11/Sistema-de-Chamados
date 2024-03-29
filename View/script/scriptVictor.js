// Tela chamado ---------------------------------

var inptSolicitante = $("#inptSolicitante");
var inptSetor = $("#inptSetor");
var inptEmail = $("#inptEmail");
var inptTelefone = $("#inptTelefone");
var inptRamal = $("#inptRamal");
var txtObs = $("#txtObs");
var btnCadastro = $("#btnCadastro");
var selSelectProblema = $("#selSelectProblema");
var spanErroAdChamado = $("#spanErroAdChamado");
var inptCPF = $("#inptCPF");
var btnEnviarImg = $("#btnEnviarImg");
var spanSenhaErrada = $("#spanSenhaErrada");
//-----------------------------------------------

// Tela login -----------------------------------

var btnLogin = $("#btnLogin");
var inptUser = $("#inptUser");
var inptSenha = $("#inptSenha");
var spanErroLogin = $("#spanErroLogin");

//-----------------------------------------------

// Tela atendente -------------------------------

//-----------------------------------------------

var flagSpanErro = false;

btnEnviarImg.click(function (event) {
    event.preventDefault();
});

inptSolicitante.keyup(function(){VerificarDigitacaoSemTrim(inptSolicitante)});
inptEmail.keyup(function(){VerificarDigitacao(inptEmail)});
inptTelefone.keyup(function(){VerificarDigitacao(inptTelefone)});
inptRamal.keyup(function(){VerificarDigitacao(inptRamal)});
inptCPF.keyup(function(){VerificarDigitacao(inptCPF)});
inptSenha.keyup(function(){VerificarDigitacao(inptSenha); $(spanSenhaErrada).hide()});
txtObs.keyup(function(){VerificarDigitacaoSemTrim(txtObs)});
inptUser.keyup(function(){VerificarDigitacaoSemTrim(inptUser); $(spanSenhaErrada).hide()});

selSelectProblema.click(function(){VerificarSelect(selSelectProblema)});
inptSetor.click(function(){VerificarSelect(inptSetor)});

btnLogin.click(function(event){
    ValidarCampos(inptUser);
    ValidarCampos(inptSenha);
    $(spanSenhaErrada).hide();
    if(flagSpanErro == true){
        btnLogin.css("box-shadow", "0px 0px 4px 2px rgba(255, 0, 0, 0.7)");
        spanErroLogin.css("display", "block");
        flagSpanErro = false;
        event.preventDefault();
    }else{
        btnLogin.css("box-shadow", "0px 0px 3px 2px rgba(0, 255, 0, 0.2)");
        spanErroLogin.css("display", "none");
        flagSpanErro = false;
    }
});

btnCadastro.click(function(event){
    ValidarCampos(inptSolicitante);
    ValidarCampos(inptEmail);
    ValidarCampos(inptTelefone);
    ValidarCampos(inptRamal);
    ValidarCampos(txtObs);
    ValidarCampos(inptCPF);
    ValidarCampos(inptSenha);
    VerificarSelect(selSelectProblema);
    VerificarSelect(inptSetor);

    
    if(flagSpanErro == true){
        btnCadastro.css("box-shadow", "0px 0px 4px 2px rgba(255, 0, 0, 0.7)");
        spanErroAdChamado.css("display", "block");
        flagSpanErro = false;
        event.preventDefault();
    }else{
        btnCadastro.css("box-shadow", "0px 0px 3px 2px rgba(0, 255, 0, 0.2)");
        spanErroAdChamado.css("display", "none");
        flagSpanErro = false;
    }
});

function ValidarCampos(campo){
    if(campo.val() == "") { 
            campo.css("box-shadow", "0px 0px 4px 2px rgba(255, 0, 0, 0.7)");
            flagSpanErro = true;
       }else
            campo.css("box-shadow", "none");
};

function VerificarDigitacao(campo){
if(campo.val().trim() != "") { 
        campo.css("box-shadow", "0px 0px 3px 2px rgba(0, 255, 0, 0.6)");
        campo.val(campo.val().trim());
    }else
        campo.css("box-shadow", "0px 0px 5px 2px rgba(255, 0, 0, 0.2)");
};

function VerificarDigitacaoSemTrim(campo){
    if(campo.val().trim() != "")
        campo.css("box-shadow", "0px 0px 3px 2px rgba(0, 255, 0, 0.6)");
    else
        campo.css("box-shadow", "0px 0px 5px 2px rgba(255, 0, 0, 0.2)");
};

function VerificarSelect(select){
    if(select.val() != "0"){
        select.css("box-shadow", "0px 0px 3px 2px rgba(0, 0, 255, 0.1)");
    }else{
        select.css("box-shadow", "0px 0px 4px 2px rgba(255, 0, 0, 0.7)");
        flagSpanErro = true; 
    }
};
