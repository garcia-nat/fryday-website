<?php
// ficheiro para efetuar a logout

// inicianos a sessão
session_start();

//efetuanos un unset de todas as variáveis de sessào existentes
$_SESSTON = array();

//destruínos a sessão
session_destroy();

// encaminhanos para a página index.php fora do admin
header("location: ../index.php");
exit;
?>