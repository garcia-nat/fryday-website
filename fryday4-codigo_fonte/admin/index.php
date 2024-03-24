<?php
// iniciamos uma sessao
session_start();

// verificar se o utilizador está com login efetuado, se sim encaminhar para a pagina produtos.php
if (isset($_SESSION["login"]) && $_SESSION["login"] === true) {
    header("location: produtos.php");
    exit;
}

// carregar o ficheiro db.php responsavel pelo acesso a bd
include_once("db.php");

// verificar se ha um post
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // verificar os campos username e password
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        // redirecionamos para a pagina index.php com o codigo de erro = 1
        header("location: index.php?erro=1");
    } else {
        // definimos as variaveis 
        $username = $_POST["username"];
        $password = $_POST["password"];

        // consulta a base de dados
        $query = "SELECT * FROM utilizadores WHERE username='$username'";

        // executar a consulta
        $resultado = mysqli_query($conexao, $query);

        // se o resultado resultar num true...
        if ($resultado) {

            $utilizador = mysqli_fetch_row($resultado);
            $idUtilizador = $utilizador[0];
            $usernameUtilizador = $utilizador[1];
            $passwordUtilizador = $utilizador[2];

            // verificar a password
            if (password_verify($password, $passwordUtilizador)) {

                // guardar daos em variaveis de sessao
                $_SESSION["login"] = true;
                $_SESSION["id"] = $idUtilizador;
                $_SESSION["username"] = $usernameUtilizador;

                //redirecionamos para a pagina produtos.php
                header("location: produtos.php");
            } else {
                // no caso de password invalida redirecionamos para o index
                header("location: index.php?erro=2");
            }
        }

        // fechar a ligacao ao mysql
        mysqli_close($conexao);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-PT"> 
<head>
    <meta charset="UTF-8">
    <title>FryDay</title>
    <!-- Link para o icone no top do site (browser)-->
    <link rel="icon" type="image/x-icon" href="../img/logo-2-white-ico.ico">
    <!-- ligação ao fuicheiro CSS -->
    <link rel="stylesheet" href="../style.css">

</head>



<body>


    <div class="containerIndex">
        <form action="index.php" method="post">
            <br>
            <h1>Login</h1> <!-- Titulo -->
            <div class="form-group">
                <input type="text" name="username" class="form-control" value="" placeholder="Nome">
                <input type="password" name="password" class="form-control" placeholder="Senha">
                <input type="submit" class="btnIndex" value="Login">
            </div>
        </form>

        <?php
        // tratar as mensagens de erro
        if (!empty($_GET["erro"])) {
            $erro = $_GET["erro"];

            // em funcao do codigo do erro apresentamos uma mensagem de erro
            switch ($erro) {
                case 1:
                    $erro_descricao = "Username e/ou password vazio/invalido!";
                    break;
                case 2:
                    $erro_descricao = "Username e/ou password incorreto!";
                    break;
            }
        }

        // apresentar a mensagem de erro
        if (isset($erro)) {
            ?>
            <div class="alert alert-danger alert-disnissible">
                <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>
                    <?= $erro_descricao ?>
                </strong>
            </div>
            <?php
        }
        ?>

    </div>

</body>

</html>

