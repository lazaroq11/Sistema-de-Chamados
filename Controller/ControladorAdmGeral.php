<?php
session_start();
$tecnico = "Técnico";
$admArea = "ADM Área";
$tipoCadastro = "";
if (isset($_POST["tipoCadastro"])) $tipoCadastro = $_POST["tipoCadastro"];
require_once "../Model/Setor.php";
require_once "../Model/Login.php";
require_once "../Model/Usuario.php";
require_once "../Model/Gerente.php";
require_once "../Model/Tecnico.php";

if ($tipoCadastro == "setor")
{
    $novoSetor = new Setor();
    $novoSetor->setNome($_POST["nomeSetor"]);
    $novoSetor->setCodigo((int)($_POST["codigoSetor"]));
    $novoSetor->setTel((int)$_POST["telefoneSetor"]);
    $novoSetor->setEmail($_POST["emailSetor"]);
    $resposta = $novoSetor->Incluir();
    if ( $resposta > 0){
        $_SESSION["mensagemSucesso"] = "<div style='position: absolute; left: 28%; top: 28%; font-size: 2.5em; font-family: Constantia' >
            <span style='color: darkcyan; font-weight: bolder'>Setor cadastrado com sucesso</span>!" . "<br>" .
            "<p style='font-weight: bolder'>Informações: </p>" . "<p style='font-weight: bolder'>email: "
            . $novoSetor->getEmail() . "<br>" . "Telefone: " . $novoSetor->getTel() . "</p></div>";
        header('Location: ..\View\Sucesso.php');
    }
    else
        header('Location: ..\View\Erro.php');
}
elseif ($tipoCadastro == "tecnico")
{
    $novoTecnico = new Tecnico();
    $loginTecnico = new Login();
    $novoTecnico->setNome($_POST["nomeTec"]);
    $novoTecnico->setCPF($_POST["CpfTec"]);
    $novoTecnico->setEmail($_POST["EmailTec"]);
    $novoTecnico->setTelefone($_POST["TelefoneTec"]);
    $novoTecnico->setCodigoSetor($_POST["SelectAdAreaTec"]);
    $loginTecnico->setUsuario($_POST["EmailTec"]);
    $novoTecnico->setFuncao($tecnico);
    $loginTecnico->Incluir();
    $loginTecnico->pesquisarLogin();
    $novoTecnico->setIdLogin($loginTecnico->getIdLogin());
    $resposta = $novoTecnico->CadastroTecnico();
    if ( $resposta > 0){
        $_SESSION["mensagemSucesso"] = "<div style='position: absolute; left: 28%; top: 28%; font-size: 2.5em; font-family: Constantia' >
            <span style='color: darkcyan; font-weight: bolder'>Técnico cadastrado com sucesso</span>!" . "<br>" .
            "<p style='font-weight: bolder'>Dados de acesso: </p>" . "<p style='font-weight: bolder'>Login: "
            . $novoTecnico->getEmail() . "<br>" . "Senha: " . $loginTecnico->getSenha() . "</p></div>";
        header('Location: ..\View\Sucesso.php');
    }
    else
        header('Location: ..\View\Erro.php');
}
else if ($tipoCadastro == "gerente")
{
    $novoGerente = new Gerente();
    $loginGerente = new Login();
    $novoGerente->setNome($_POST["nomeGerente"]);
    $novoGerente->setCPF($_POST["CpfGerente"]);
    $novoGerente->setEmail($_POST["EmailGerente"]);
    $novoGerente->setTelefone($_POST["TelefoneGerente"]);
    $novoGerente->setCodigoSetor($_POST["selectAdAreaAdmArea"]);
    $loginGerente->setUsuario($_POST["EmailGerente"]);
    $novoGerente->setFuncao($admArea);
    $loginGerente->Incluir();
    $loginGerente->pesquisarLogin();
    $novoGerente->setIdLogin($loginGerente->getIdLogin());
    $resposta = $novoGerente->CadastroGerente();
    if ( $resposta > 0){
        $_SESSION["mensagemSucesso"] = "<div style='position: absolute; left: 28%; top: 28%; font-size: 2.5em; font-family: Constantia' >
            <span style='color: darkcyan; font-weight: bolder'>Gerente cadastrado com sucesso</span>!" . "<br>" .
            "<p style='font-weight: bolder'>Dados de acesso: </p>" . "<p style='font-weight: bolder'>Login: "
            . $novoGerente->getEmail() . "<br>" . "Senha: " . $loginGerente->getSenha() . "</p></div>";
        header('Location: ..\View\Sucesso.php');
    }
    else
        header('Location: ..\View\Erro.php');
}
