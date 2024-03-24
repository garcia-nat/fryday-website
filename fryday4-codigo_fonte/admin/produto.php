<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <title>FryDay</title>
    <!-- Link para o icone no top do site (browser)-->
    <link rel="icon" type="image/x-icon" href="../img/logo-2-white-ico.ico">
</head>



<?php


// incluimos o ficheiro para fazer o login
include_once("check_session.php");

include_once("../header.php");


// vamos verificar se temos um GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {


    // vamos verificar se é passado um valor no id e se o mesmo é numérico (ex: id=1)
    if (isset($_GET["id"]) && is_numeric($_GET["id"])) {


        // incluímos o ficheiro db.php que faz a ligação à base de dados mysqli
        include_once("db.php");


        // definimos a variável tarefa
        $idProduto = $_GET["id"];


        // efetuamos uma consulta select apenas para a tarefa com o respetivo id
        $query = "SELECT * FROM produtos WHERE idProduto=$idProduto";


        // executamos a consulta
        $resultado = mysqli_query($conexao, $query);


        // obtemos uma variável com o número de registos encontrados na consulta
        $registos = mysqli_num_rows($resultado);


        // vamos retornar uma variável produtos com o resultado em formato de array
        $produtos = mysqli_fetch_row($resultado);
        $produto = $produtos[1];
        $obs = $produtos[2];
        $preco = $produtos[3];
        $tipo = $produtos[4];
        $imagem = $produtos[5];


    } else {
        // se não temos id, colocamos as variáveis como vazias
        $idProduto = "";
        $produto = "";
        $obs = "";
        $preco = "";
        $tipo = "";
        $imagem = "";
    }
}

// vamos verificar se existe um POST (que é quando o botão editar / guardar é carregado)
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // incluímos o ficheiro db.php
    include_once("db.php");

    // vamos verificar se os campos estão preenchidos e definimos as variaveis 
    if (!empty($_POST["produto"])) {
        $idProduto = $_POST["produto"];
    } else {
        $idProduto = "";
    }

    // de outra forma com if ternário
    $idProduto = (!empty($_POST["idProduto"])) ? $_POST["idProduto"] : "";
    $produto = (!empty($_POST["produto"])) ? $_POST["produto"] : "";
    $obs = (!empty($_POST["obs"])) ? $_POST["obs"] : "";
    $preco = (!empty($_POST["preco"])) ? $_POST["preco"] : "";
    $tipo = (!empty($_POST["tipo"])) ? $_POST["tipo"] : "";
    $imagem = (!empty($_POST["imagem"])) ? $_POST["imagem"] : "";

    // Verificar se foi enviada uma nova imagem
    if (!empty($_FILES["imagem"]["name"])) {
        $imagem_tmp = $_FILES["imagem"]["tmp_name"];
        $imagem_extension = strtolower(pathinfo($_FILES["imagem"]["name"], PATHINFO_EXTENSION));
        $imagem = date("YmdHis") . "." . $imagem_extension;
        // move a imagem para a pasta de uploads
        move_uploaded_file($imagem_tmp, "../img/img-menu/" . $imagem);
    }


    // inserir um novo produto ou editar um existente
    // se tivermos um ID, estamos a editar, sem ID estamos a adicionar um novo
    if (empty($idProduto)) {
        // query para inserir um novo produto
        $query = "INSERT INTO produtos (produto, obs, preco, tipo, imagem) VALUES ('$produto', '$obs', '$preco', '$tipo', '$imagem' )";

        // executamos a consulta
        $resultado = mysqli_query($conexao, $query);

        // se o resultado retornar um true, encaminhamos a página para produtos.php com uma msg=1
        if ($resultado) {
            header("location: produtos.php?msg=1");
        }

    } else {

        // upload da foto
        if (isset($imagem) && !empty($imagem)) {
            if (($extension == "jpg" || $extension == "jpeg") && $type == "image/jpeg" && $size <= $max_size) {
                move_uploaded_file($tmp_name, "../img/img-menu/$imagem");
            }
            // query para editar um prato existente sem alterar a foto
            $query = "UPDATE produtos SET produto='$produto', obs='$obs', preco='$preco', tipo='$tipo', imagem='$imagem' WHERE idProduto=$idProduto";
        } else {
            // query para editar um prato existente com alteração da foto
            $query = "UPDATE produtos SET produto='$produto', obs='$obs', preco='$preco', tipo='$tipo' WHERE idProduto=$idProduto";
        }

        // executamos a consulta
        $resultado = mysqli_query($conexao, $query);

        // se o resultado retornar um true, encaminhamos a página para produtos.php com uma msg=2
        if ($resultado) {
            header("location: produtos.php?msg=2");
        }
    }

}


/*  incluímos o ficheiro header.inc.php */
?>

<body>
    <div class="container">
        <h2>Produtos</h2>
        <hr>
        <form method="POST" action="produto.php" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="produto" class="col-sm-3 col-form-label">Produto</label>
                <div class="col-sm-7">
                    <input type="text" name="produto" id="produto" class="form-control" placeholder="Produto"
                        value="<?= $produto ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="obs" class="col-sm-3 col-form-label">Obs</label>
                <div class="col-sm-7">
                    <textarea name="obs" id="obs" class="form-control" placeholder="Observações"><?= $obs ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="preco" class="col-sm-3 col-form-label">Preco</label>
                <div class="col-sm-7">
                    <input type="text" name="preco" id="preco" class="form-control" placeholder="Preço"
                        value="<?= $preco ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="tipo" class="col-sm-3 col-form-label">Tipo</label>
                <div class="col-sm-7">
                    <select name="tipo" id="tipo" class="form-control" placeholder="Tipo" value="<?= $tipo ?>" required>
                        <option value=" Hamburger" <?php if ($tipo == "Hamburger")
                            echo "selected"; ?>>Hamburger</option>
                        <option value="HotDog" <?php if ($tipo == "HotDog")
                            echo "selected"; ?>>HotDog</option>
                        <option value="Pizza" <?php if ($tipo == "Pizza")
                            echo "selected"; ?>>Pizza</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="imagem" class="col-sm-3 col-form-label">Imagem</label>
                <div class="col-sm-7">
                    <input type="file" name="imagem" id="imagem" class="" value="<?= $imagem ?>">
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-2">
                    <input type="hidden" name="idProduto" value="<?= $idProduto ?>">
                    <button type="submit" name="enviar" class="btn btn-dark" >Guardar</button>&nbsp<a href="produtos.php"><button type="button" class="btn btn-light">Voltar</button></a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>

<?php
// incluímos o ficheiro footer.inc.php
include_once("footer.inc.php");
?>