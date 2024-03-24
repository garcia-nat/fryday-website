<?php
// ficheiro para edtar o produto

// vamos verificar se temos um GET

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    // vamos verificar se é passado um valor no id e se o mesmo é numerico e se o estado é 0 ou 1 
    if (isset($_GET["id"]) && is_numeric($_GET["id"]) && ($_GET["estado"] == 0 || $_GET["estado"] == 1)) {
        
         // definir uma variavel
         $idProduto = $_GET["id"];

         // incluimos o ficheiro db.php
         include_once("db.php");
 
         // vamos verificar se exite o ID na base de dados 
         $query = "SELECT * FROM produtos WHERE idProduto=$idProduto";
 
         // executamos a consulta
         $resultado = mysqli_query($conexao, $query);
 
         // atribuimos à variavel o numero de registos retornados pela query
         $produtoEncontrada = mysqli_num_rows($resultado);
  
         // limpar a variavel $resultado
         mysqli_free_result($resultado);

        // se existir o id, podemos alterar o seu estado de concluida
        if ($produtoEncontrada > 0) {

            // executamos a consulta 
            $resultado = mysqli_query($conexao, $query);

            // se o resultado retornar um true encaminhamos com msg=2
            if ($resultado) {
                header("location: produtos.php?msg=2");
            }

        } else {

            // executamos a consulta
            $resultado = mysqli_query($conexao, $query);

            if ($resultado) {
                header("location: produtos.php?msg=5");
            }
        }

        // fechamos a ligacao ao mysql
        mysqli_close($conexao);
    }
}

?>