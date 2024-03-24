<?php
// incluímos o ficheiro header.inc.php
include_once("header.php");

// incluímos o ficheiro db.php
include_once("admin/db.php");



// verificar se temos um argumento pagina no GET
if (isset($_GET["pagina"])) {
    $pagina = $_GET["pagina"];
} else {
    $pagina = 1;
}

// definimos o número de registros por página
$nRegistosPagina = 8;
$regInicial = ($pagina - 1) * $nRegistosPagina;

$query = "SELECT COUNT(*) FROM produtos";
$resultado = mysqli_query($conexao, $query);
$totalRegistos = mysqli_fetch_array($resultado)[0];
$totalPaginas = ceil($totalRegistos / $nRegistosPagina);



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

?>  
<!DOCTYPE html>
<html lang="pt-pt"> <!-- Linguagem da pagina web -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ligação para o ficheiro css-->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section id="nosso-menu-header">
        <div class="menuTitulo">
            <h2>Nosso Menu</h2>
        </div>
    </section>

    <div class="title-menu-section">
        <div class="card-container-title">
            <h3>Destaques Favoritos</h3>
        </div>
    </div>
    <div id="productsMenu">
        <div class="card-container">
            <div class="cardMenu-container-menu">



                <?php
                // código para listar os registros encontrados na tabela produtos
                $query = "SELECT * FROM produtos LIMIT $regInicial, $nRegistosPagina";
                $resultado = mysqli_query($conexao, $query);
                $registos = mysqli_num_rows($resultado);
                if (!empty($registos)) {
                    while ($produto = mysqli_fetch_assoc($resultado)) {
                        ?>
                        <div class="card">
                            <div class="card-imgs">
                                <a href="#" target="_blank">
                                    <img src="img/img-menu/<?= $produto["imagem"] ?>"
                                        style="width: 100%; height: auto; border-radius:20px;">
                                </a>
                            </div>
                            <div class="card-info">
                                <h3>
                                    <?= $produto["produto"] ?>
                                </h3>
                            </div>
                            <div class="card-footer">
                                <p class="text-title">
                                    <?= $produto["obs"] ?>
                                </p>
                            </div>
                            <div class="card-add-to-cart">
                                <button class="add-to-cart-btn"
                                    onclick="addToCart('<?= $produto["produto"] ?>', <?= $produto["preco"] ?>)">€<?= $produto["preco"] ?></button>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>

            </div>

    
        </div>
        <script src="script.js"></script>
    </div>

<div class="section-mais">
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

<style>
    /* Link para a font do google */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800&display=swap");
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box; // Aplica box-sizing: border-box; a todos os elementos
}

#nosso-menu-header {
    display: flex;
    width: 100%;
    justify-content: center;
    height: 80vh;
    background: #111;
    align-self: center;
    background-image: url('img/img-header-menu.jpg'); /* Define uma imagem de fundo para o elemento*/
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.menuTitulo {
    justify-content: center;
    display: flex;
    align-items: center;
    font-family: "Poppins", sans-serif; /* Define a família de fontes para elementos com essa classe*/
}

.menuTitulo h2 {
    font-weight: 900;
    text-transform: uppercase;
    font-size: 5.5rem;
    color: #fff;
}

#productsMenu {
    display: flex;
    width: 100%;
    justify-content: center;
    height: 150vh;
    background: #fff;
    align-self: center;
}

.title-menu-section {
    height: 25vh;
    display: flex;
    justify-content: center;
    align-items:center;
    margin-bottom: 40px;
}


.card-container-title {
    justify-content: center;
    display: flex;
    align-items:center;
    margin-top: 150px;
}


.card-container-title h3 {
    text-align: center;
    display: flex;
    align-items: center;
    font-size: 5rem;
    font-weight: 900;
    text-transform: uppercase;
}

.card-container {
    display: flex;
    justify-content: center;
    width: 100%;
    height: 50%;
}

.cardMenu-container-menu {
    width: 90%;
    display: flex;
    justify-content: center;
    flex-direction: row;
    flex-wrap: wrap;
    height: 100%;
}

.card-container .cardMenu-container-menu .card {
    width: 300px;
    height: 500px;
    align-items: center;
    padding: 1.5em;
    background-color: #fff;
    display: flex;
    margin: 10px;
    padding: 10px;
    border-radius: 30px;
    justify-content: space-around;
}

.card-imgs {
    width: 80%;
    border-radius: 20px;
    margin-top: 5px;
}

.cardMenu-container-menu .card-info {
    padding-top: 10%;
}

.cardMenu-container-menu .card .card-footer {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 10px;
    background:transparent;
    border-top: 1px solid #ddd;
}

/* Texto*/
.cardMenu-container-menu .card .card-footer p.text-title {
    font-size: .8rem;
    font-weight: 300;
    color: #000;
    width: 100%;
    font-family: "Poppins", sans-serif;
    padding: 20px;
    text-align: center;
}

/* Botão*/
.cardMenu-container-menu .card .card-button {
    border: 1px solid #252525;
    display: flex;
    padding: 1em;
    cursor: pointer;
    border-radius: 100%;
    transition: .3s ease-in-out;
    text-decoration: none;
}

.cardMenu-container-menu .card-adicionar {
    border: none;
    margin-top: 10px;
    background: #fff;
    display: flex;
    padding: 10px;
    cursor: pointer;
    align-items: center;
    justify-content: center;
    border-radius: 50px;
    transition: .3s ease-in-out;
}

.cardMenu-container-menu .card-button .card-button:hover {
    border: 1px solid #ffcaa6;
    background-color: #ffcaa6;
}

.cardMenu-container-menu .card-adicionar:hover {
    border: none;
    background-color: #fafafa;
}

.cardMenu-container-menu .card-button button {
    border: none;
    padding: 15px;
    border-radius: 10px;
    transition: all ease-in-out .3s;
}

.cardMenu-container-menu .card-button button:hover {
    border: none;
    background: #fafafa;
    color: #2e2929;
    transition: all .4s;
}

.card-add-to-cart button {
    border-radius: 30px;
    background: #05a751;
    padding: 15px;
    border: none;
    color: #fff;
    transition: all ease-in-out .2s;
}

.card-add-to-cart button:hover {
    color: #000;
    background: #fff;
    border: 1px solid #9ea9a3;
}







.section-mais {
    display:flex;
    justify-content:center;
    align-items:center;
}
</style>

<script>

</script>

</html>


<?php
// incluímos o ficheiro footer.inc.php
include_once("footer.html");
?>