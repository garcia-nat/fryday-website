
<?php
session_start();
// incluir o ficheiro para validar a sessao de login
$loggedIn = isset($_SESSION['username']) ;



// vamos verificar se existe um POST (que é quando o botão editar/guardar é carregado)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // incluímos o ficheiro db.php
  include_once("db.php");

  // vamos verificar se os campos estão preenchidos e definimos as variáveis
  if (!empty($_POST["produto"])) {
      $idProduto = $_POST["produto"];
  } else {
      $idProduto = "";
  }

  // de outra forma com if ternário
  $idProduto = (!empty($_POST["idProduto"])) ? $_POST["idProduto"] : "";
  $produto = (!empty($_POST["produto"])) ? $_POST["produto"] : "";

  // inserir um novo produto ou editar um existente
  // se tivermos um ID, estamos a editar; sem ID, estamos a adicionar um novo
  if (empty($idProduto)) {
      // query para inserir um novo produto
      $query = "INSERT INTO carrinho (id_produto) VALUES ('$produto')";

      // executamos a consulta
      $resultado = mysqli_query($conexao, $query);

      // se o resultado retornar true, encaminhamos a página para produtos.php com uma msg=1
      if ($resultado) {
          header("location: compra-produto.php?msg=1");
          exit;
      }
  } else {
      // executamos a consulta
      $resultado = mysqli_query($conexao, $query);

      // se o resultado retornar true, encaminhamos a página para produtos.php com uma msg=2
      if ($resultado) {
          header("location: compra-produto.php?msg=2");
          exit;
      }
  }
}

?>



<!DOCTYPE html>
<html lang="pt-pt"> <!-- Linguangem do site -->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Link para o icone no top do site (browser)-->
  <link rel="icon" type="image/x-icon" href="img/logo-2-white-ico.ico" >

  <!-- Ligação ao ficheiro CSS -->
  <link rel="stylesheet" href="style.css"/>

  <style>
    .nav .search-icon {
    /* Alterar o estilo e posicao do icone search */
    font-size: 20px;
    cursor: pointer;
    position: absolute;
    right: 50px;
}
  </style>

  <!-- Link para o site de icones -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
   <!-- jQuery -->
   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!--Font awesome  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">


  <title>FryDay</title> <!-- Titulo da pagina -->
</head>


<body>

<?php if ($loggedIn === true)  { ?>   <!-- Se estiver a seccao iniciada -->

     <!-- Link para o icone no top do site (browser)-->
  <link rel="icon" type="image/x-icon" href="img/logo-2-white-ico.ico">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark mb-4">
  <a class="navbar-brand" href="index.php">FryDay</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" 
  aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Terminar sessão com: <?php if(isset($_SESSION["username"])) echo $_SESSION["username"]; ?></a>
      </li>
    </ul>
  </div>
</nav>




  <?php } else {?><!-- Se NAO estivel com a seccao iniciada -->
    <nav class="nav"> <!-- Header -->
        <i class="uil uil-bars navOpenBtn"></i> <!-- Icone do meunu hamburguer -->


        <!-- Logo do site -->
        <a href="index.php">
        <img src="img/logo-3-black.png" class="logo" alt="Logo do Empresa">
        </a>


        <!-- Paginas do header -->
        <ul class="nav-links">
        <i class="uil uil-times navCloseBtn"></i>
        <li><a href="index.php">Início</a></li>
        <li><a href="aboutus1.php">Sobre nós</a></li>
        <li><a href="produtos-menu.php">Menu</a></li>
        <li><a href="contact.php">Contactos</a></li>
        
        </ul>
        

      
        <!-- Campo de pesquisa -->
        

     
            <!-- Carrinho -->
    <div class="allCart">
      <div class="containerCart">
        <div class="shopping">
          <!-- Icone do caarrinho -->
          <i class="uil uil-shopping-bag cart-icon" id="cartIcon"></i>    
          <span class="quantity" id="cartQuantity">0</span>
        </div>
      </div>
      
      <div class="carrinho">
<!-- Início da div que agrupa elementos relacionados ao carrinho de compras -->
    <div id="cart">
    <!-- Div que contém todo o conteúdo do carrinho de compras -->
        <div class="cart-title">
        <!-- Título "Carrinho" dentro da div "cart" -->
            <h2>Carrinho</h2>
        </div>
        <div class="cart-items-container">
        <ul id="cart-items"></ul>
        <!-- Lista não ordenada que será preenchida dinamicamente com itens do carrinho -->
        
        <!-- Exibe o preço total atual do carrinho -->
        </div>
        <div class="checkout">
    
        <form action="compra-produto.php" method="post">
            <input type="hidden" name="total_price" value="0" > 
            <!-- Campo oculto que armazena o preço total para ser enviado ao processar a compra -->
            <a href="#" class="finalizarCarrinho"><button id="total-price" type="submit">Preço total: €0</button></a>
        </form>
            <a class="closeCarrinho"><button>Fechar</button></a>
        </div>
    </div>
</div>
<script src="script.js"></script>





        <!-- Icon do user 
        <div class="btnUser">
            <a class="uil uil-user user-icon user-icon" href="admin/index.php"></a>
        </div>
-->
    </nav> <!-- Fim do Header -->

    
  <?php }?>


    <script> // Script do Header para o search
        const nav = document.querySelector(".nav"), // Seleciona o elemento com a classe "nav"
            navOpenBtn = document.querySelector(".navOpenBtn"), // Seleciona o elemento com a classe "navOpenBtn"
            navCloseBtn = document.querySelector(".navCloseBtn"); // Seleciona o elemento com a classe "navCloseBtn"


        


        // Adiciona um evento de clique ao botão de abertura do menu
        navOpenBtn.addEventListener("click", () => {
            nav.classList.add("openNav"); // Adiciona a classe "openNav" ao elemento "nav"
            nav.classList.remove("openSearch"); // Remove a classe "openSearch" do elemento "nav"
            searchIcon.classList.replace("uil-times", "uil-search"); // Substitui a classe "uil-times" por "uil-search" no ícone de pesquisa
        });


        // Adiciona um evento de clique ao botão de fechamento do menu
        navCloseBtn.addEventListener("click", () => {
            nav.classList.remove("openNav"); // Remove a classe "openNav" do elemento "nav"
        });


        function munuToggle() {
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }


        
    // Carrinho
    let openShopping = document.querySelector('.shopping');
    let closeCarrinho = document.querySelector('.closeCarrinho');
    let allCart = document.querySelector('.allCart');

    openShopping.addEventListener('click', ()=>{
      allCart.classList.add('active');
    })
    
    closeCarrinho.addEventListener('click', ()=>{
      allCart.classList.remove('active');
    })


    </script>


</body>


</html>
    <!--Click Outside to Close
    function onClick(event) {
        if (event.target === dialog) {
            dialog.close();
        }
    }
    const dialog = document.querySelector("dialog");
    dialog.addEventListener("click", onClick);
    dialog.showModal();
    Fim do Click Outside to Close-->
    


