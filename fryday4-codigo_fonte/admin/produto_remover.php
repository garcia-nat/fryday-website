<?php

// ficheiro para remover os registos da tabela produtos

// vamos verificar se existe um GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    // vamos verificar se é passadoum valor numerico no id
    if (isset($_GET["id"]) && is_numeric($_GET["id"])) {

        // definir uma variavel
        $idProduto = $_GET["id"];

        // incluimos o ficheiro db.php
        include_once("db.php");

        // vamos verificar se exite o ID na base de dados s
        $query = "SELECT * FROM produtos WHERE idProduto=$idProduto";

        // executamos a consulta
        $resultado = mysqli_query($conexao, $query);

        // atribuimos à variavel o numero de registos retornados pela query
        $produtoEncontrada = mysqli_num_rows($resultado);

        // limpar a variavel $resultado
        mysqli_free_result($resultado);

        // se existe o id, podemos remove-lo
        if ($produtoEncontrada > 0) {

            // efetuamos uma consulta
            $query = "DELETE FROM produtos WHERE idProduto=$idProduto";

            // executamos a consulta
            $resultado = mysqli_query($conexao, $query);

            // se o resultado retornar true, encaminhamos com a msg=3
            if ($resultado) {
                header("location: produtos.php?msg=3");
            }

        } else {

            // executamos a consulta
            $resultado = mysqli_query($conexao, $query);

            if ($resultado) {
                header("location: produtos.php?msg=4");
            }
        }

        // fechamos a ligacao ao mysql
        mysqli_close($conexao);
    }
}

?>