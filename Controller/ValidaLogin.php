<?php
session_start();
$user = null;
$senha = null;
if (isset($_POST["User"])) $user = $_POST["User"];
if (isset($_POST["Senha"])) $senha = $_POST["Senha"];

require_once "../Model/Login.php";
require_once "../Model/Tecnico.php";
require_once "../Model/Gerente.php";

if (isset($_POST["formLogin"]))
{
    $login = new Login();
    $login->setUsuario($user);
    $login->setSenha($senha);
    $login->pesquisarLogin();
    $resposta = $login->validaLogin();
    if ($resposta > 0)
    {
        $_SESSION["usuario"] = $user;
        if ($user == "admin")
        {
            header('Location: ..\View\AdmGeralMain.php');
        }
        else
        {
            $gerente = new Gerente();
            $gerente->setEmail($user);
            if ($gerente->pesquisarPorEmail() > 0)
            {
                $_SESSION["codigoSetorGerente"] = $gerente->getCodigoSetor();
                $_SESSION["cpfGerente"] = $gerente->getCPF();
                header('Location: ..\View\GerenteMain.php');
            }
            else
             {
                $tecnico = new Tecnico();
                $tecnico->setEmail($user);
                $tecnico->pesquisarPorEmail();
                $_SESSION["codigoSetorTec"] = $tecnico->getCodigoSetor();
                $_SESSION["cpfTec"] = $tecnico->getCPF();
                header('Location: ..\View\ListaChamado.php');
            }
        }
    }
    else
    {
        $_SESSION["erroLogin"] = "Usuário ou senha incorretos, verifique e tente novamente.";
        header('Location: ..\View\Login.php');
    }
}
