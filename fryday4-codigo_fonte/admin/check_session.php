<?php
//verificar se existe um Login foi efetuado, se não encaninhanos para a página de login (index.php)

//inicianos a sessão
session_start();

if ($_SESSION["login"] !== true) {
    header("location: index.php");
    exit;
}
?>