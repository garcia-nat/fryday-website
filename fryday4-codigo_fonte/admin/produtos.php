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

// incluímos o ficheiro header.inc.php
include_once("../header.php");

// incluímos o ficheiro db.php
include_once("db.php");

// verificar se temos um argumento pagina no GET
if (isset($_GET["pagina"])) {
    $pagina = $_GET["pagina"];
} else {
    $pagina = 1;
}

// definimos o número de registros por página
$nRegistosPagina = 4;
$offset = ($pagina - 1) * $nRegistosPagina;

/* Construcao do search */
// se existir pesquisa (QUERY / q=?)
if (isset($_GET["q"])) {
    $query = $_GET["q"];
    $queryTotalRegistosPagina = "SELECT count(*) FROM produtos WHERE produto LIKE '%$query%'";
} elseif(isset($_GET["t"])) {
    $tipo = $_GET["t"];
    $queryTotalRegistosPagina = "SELECT count(*) FROM produtos WHERE tipo LIKE '%$query%'";
} else {
    $queryTotalRegistosPagina = "SELECT count(*) FROM produtos";
}
$resultado = mysqli_query($conexao, $queryTotalRegistosPagina);
$totalRegistos = mysqli_fetch_array($resultado)[0];
$totalPaginas = ceil($totalRegistos / $nRegistosPagina);

// vamos efetuar uma consulta/query na tabela tarefas da bd
// se existir pesquisa (QUERY / q=?)
if (isset($_GET["q"])) {
    $query = "SELECT * FROM produtos WHERE produto LIKE '%$query%'";
} elseif(isset($_GET["t"])) {
    $tipo = $_GET["t"];
    $query = "SELECT * FROM produtos WHERE tipo LIKE '%$tipo%'";
} else {
    $query = "SELECT * FROM produtos LIMIT $offset, $nRegistosPagina";
}

// executamos a consulta
$resultado = mysqli_query($conexao, $query);

// obtemos uma variável com o numero de registos
$registos = mysqli_num_rows($resultado);
?>

<div class="container">

    <?php
    // mensagem de erro e de sucesso
    if (!empty($_GET["msg"])) {
        $msg = $_GET["msg"];

        // em função do código da msg vamos mostrar uma informação
        switch ($msg) {
            case 1:
                $info = "Registro inserido com sucesso.";
                $alerta = "alert-success";
                break;

            case 2:
                $info = "Registro atualizado com sucesso.";
                $alerta = "alert-info";
                break;

            case 3:
                $info = "Registro removido com sucesso.";
                $alerta = "alert-danger";
                break;
            case 4:
                $info = "O ID não existe na base de dados!";
                $alerta = "alert-danger";
                break;
        }
    }

    // se a variável $info tiver um valor (msg) vamos mostrar no ecra...
    if (isset($info)) {

        ?>
        <div class="alert <?= $alerta ?> alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>
                <?= $info ?>
            </strong>
        </div>
        <?php
    }
    ?>


    <body>

        <div class="row">
            <div class="col-4">
                <h2>Produtos</h2>
            </div>

            <div class="col-3s">
                <form method="GET" action="" class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar"
                        name="q" id="q">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg></button>
                </form>
            </div>

            <div class="col-2">
                <div class="dropdown">
                    <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tipo
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="produtos.php?t=Hamburger">Hamburger</a>
                        <a class="dropdown-item" href="produtos.php?t=Pizza">Pizza</a>
                        <a class="dropdown-item" href="produtos.php?t=Hotdog">Hotdog</a>
                    </div>
                </div>
            </div>

            <div class="col-3 text-right">
                <a href="produto.php"><button type="button" class="btn btn-dark">+ Novo Produto</button></a>
                <!-- Adcionar um novo produto -->
                <a href="produtos.php"><button type="button" class="btn btn-light">Atualizar</button></a>
                <!-- Atualizar a pagina -->

            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Observações</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Imagem</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // código para listar os registros encontrados na tabela produtos
                
                if (!empty($registos)) {
                    while ($produto = mysqli_fetch_assoc($resultado)) {
                        ?>

                        <tr>
                            <td scope="row">
                                <?= $produto["idProduto"] ?>
                            </td>
                            <td scope="row">
                                <?= $produto["produto"] ?>
                            </td>
                            <td scope="row">
                                <?= $produto["obs"] ?>
                            </td>
                            <td scope="row">
                                <?= $produto["preco"] ?>
                            </td>
                            <td scope="row">
                                <?= $produto["tipo"] ?>
                            </td>
                            <td scope="row">
                                <?= $produto["imagem"] ?>
                            </td>
                            <td scope="row">
                                <!-- Botoes de editar e apagar -->
                                <a href="produto.php?id=<?= $produto["idProduto"] ?>"><button type="button"
                                        class="btn btn-dark btn-sm mr-1"><i class="fa fa-pencil"></i></button></a>
                                <a href="produto_remover.php?id=<?= $produto["idProduto"] ?>"
                                    onclick="javascript:return confirm('Deseja remover o registo?');"><button type="button"
                                        class="btn btn-dark btn-sm mr-1"><i class="fa fa-trash"></i></button></a>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>

            </tbody>
        </table>
        
        <?php
        // vamos mostrar a paginacao se não existir query ou filtro
        if(empty($_GET["q"]) && empty($_GET["t"])) {
        ?>
        <nav aria-label="paginacao">
            <ul class="pagination">
                <li class="page-item <?php if ($pagina <= 1) { echo "disabled"; } ?>">
                    <a style="color: #000" class="page-link" href="<?php if ($pagina <= 1) { echo "#"; } else { echo "?pagina=" . ($pagina - 1); } ?>">Anterior</a>
                </li>
                <?php
                // ciclo para efetuar a paginacao 1, 2, 3...
                for ($i = 1; $i <= $totalPaginas; $i++) {
                    ?>
                    <li class="page-item <?php if ($pagina == $i) { echo "active"; } ?>">
                        <a class="page-link" href="?pagina=<?= $i ?>"><?= $i ?></a>
                    </li>
                    <?php
                }
                ?>
                <li class="page-item <?php if ($pagina == $totalPaginas) { echo "disabled"; } ?>">
                    <a style="color: #000" class="page-link" href="<?php if ($pagina != $totalPaginas) { echo "?pagina=" . ($pagina + 1); } ?>">Próxima</a>
                </li>
            </ul>
        </nav>
        <?php
        }
        ?>

</div>
</body>

</html>



<?php
// incluímos o ficheiro footer.inc.php
include_once("footer.inc.php");
?>








<style>
    .inputPesquisar {
        max-width: 190px;
        background-color: #343A40;
        color: #fff;
        padding: .15rem .5rem;
        min-height: 40px;
        outline: none;
        border: none;
        line-height: 1.15;
        border-radius: 6px;
    }

    ::placeholder {
        color: #fff;
    }
</style>