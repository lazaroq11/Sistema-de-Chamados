<?php
session_start();
require_once "../Model/Tecnico.php";
require_once "../Model/Gerente.php";

if (isset($_SESSION["usuario"]))
{
    $user = $_SESSION["usuario"];
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
            header('Location: ..\View\GerenteMain.php');
        }else
            header('Location: ..\View\Módulo Atendente.php');
    }
}