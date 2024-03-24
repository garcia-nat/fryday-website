<?php

// ligação ao servidor mysql

//definição de dados de acesso através de constantes
define("DBSERVER", "epbjc-porto.net");
define("DBUSER", "epbjc_fryday");
define("DBPWD", "NyXLr7VQ3X");
define("DBNAME", "epbjc_fryday");

$conexao = mysqli_connect(DBSERVER, DBUSER, DBPWD, DBNAME);

// verificar a ligação 
if ($conexao == false) {
    die("Erro: " . mysqli_connect_error());
} else {
    //echo "Ligação estabelecida com sucesso<br>";
    //echo mysqli_get_host_info($conexao);
}


?>