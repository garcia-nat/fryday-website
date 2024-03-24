<!DOCTYPE html>
<html>
        <!-- Link para o icone no top do site (browser)-->
        <link rel="icon" type="image/x-icon" href="img/logo-2-white-ico.ico">
<head>

  <title>Formulário de Checkout</title>
  <style>

    /* Link para a font do google */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800&display=swap");
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');


    * {
      margin:0;
      padding:0;
      box-sizing:border-box;
    }

    body {
        font-family: "Poppins", sans-serif;
      background-color: #f2f2f2;
    }

#carrinho-pagamento {
    height: 100vh;
    width: 100%;
    background: #F99F24;
    display:flex;
    justify-content:center;
    align-items:center;
    border: solid 2px #000;
}

    .modal {
  width: fit-content;
  height: fit-content;
  background: #FFFFFF;
  box-shadow: 0px 187px 75px rgba(0, 0, 0, 0.01), 0px 105px 63px rgba(0, 0, 0, 0.05), 0px 47px 47px rgba(0, 0, 0, 0.09), 0px 12px 26px rgba(0, 0, 0, 0.1), 0px 0px 0px rgba(0, 0, 0, 0.1);
  border-radius: 26px;
  max-width: 450px;
}

.form {
  display: flex;
  flex-direction: column;
  gap: 20px;
  padding: 20px;
  justify-content:center;
}

.payment--options {
  width: calc(100% - 40px);
  display: grid;
  grid-template-columns: 33% 34% 33%;
  gap: 20px;
  padding: 10px;
  border:solid 2px #f2f2f2;
  border-radius:25px;
  display:flex;
  justify-content:space-around;
  text-transform:uppercase;
  width:100%;
}
.payment--options h2 {
    font-size:2rem;
    font-weight:900;
}

.payment--options button {
  height: 55px;
  background: #F2F2F2;
  border-radius: 11px;
  padding: 0;
  border: 0;
  outline: none;
}

.payment--options button svg {
  height: 18px;
}

.payment--options button:last-child svg {
  height: 22px;
}

.separator {
  width: calc(100% - 20px);
  display: grid;
  grid-template-columns: 1fr 2fr 1fr;
  gap: 10px;
  color: #8B8E98;
  margin: 0 10px;
}

.separator > p {
  word-break: keep-all;
  display: block;
  text-align: center;
  font-weight: 600;
  font-size: 11px;
  margin: auto;
}

.separator .line {
  display: inline-block;
  width: 100%;
  height: 1px;
  border: 0;
  background-color: #e8e8e8;
  margin: auto;
}

.credit-card-info--form {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.input_container {
  width: 100%;
  height: fit-content;
  display: flex;
  flex-direction: column;
  gap: 5px;
}

.split {
  display: grid;
  grid-template-columns: 4fr 2fr;
  gap: 15px;
}

.split input {
  width: 100%;
}

.input_label {
  font-size: 10px;
  color: #8B8E98;
  font-weight: 600;
}

.input_field {
  width: auto;
  height: 40px;
  padding: 0 0 0 16px;
  border-radius: 9px;
  outline: none;
  background-color: #F2F2F2;
  border: 1px solid #e5e5e500;
  transition: all 0.3s cubic-bezier(0.15, 0.83, 0.66, 1);
}

.input_field:focus {
  border: 1px solid transparent;
  box-shadow: 0px 0px 0px 2px #242424;
  background-color: transparent;
}

.purchase--btn {
  height: 55px;
  background: #0c6044;
  border-radius: 11px;
  border: 0;
  outline: none;
  color: #ffffff;
  font-size: 13px;
  font-weight: 700;
  box-shadow: 0px 0px 0px 0px #FFFFFF, 0px 0px 0px 0px #000000;
  transition: all 0.4s cubic-bezier(0.15, 0.83, 0.66, 1);
  cursor:pointer;
}

.purchase--btn a {
    text-decoration:none;
    color:#fff;
    padding:20px;
    transition: all 0.4s cubic-bezier(0.15, 0.83, 0.66, 1);
}

.purchase--btn a:hover {
    color:#000;

}
.purchase--btn:hover {
  box-shadow: 0px 0px 0px 2px #FFFFFF, 0px 0px 0px 4px #0000003a;
  background:#ffff;
  color:#000;
  font-size: 15px;
}

/* Reset input number styles */
.input_field::-webkit-outer-spin-button,
.input_field::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

.input_field[type=number] {
  -moz-appearance: textfield;
}
  </style>
</head>
<body>


<?php
// Connection to MySQL server
define("DBSERVER", "epbjc-porto.net");
define("DBUSER", "epbjc_fryday");
define("DBPWD", "NyXLr7VQ3X");
define("DBNAME", "epbjc_fryday");

$conexao = mysqli_connect(DBSERVER, DBUSER, DBPWD, DBNAME);

// Verificar a conexao
if (!$conexao) {
    die("Erro: " . mysqli_connect_error());
}

// Recupera os dados dos itens do carrinho da requisição POST
$cartItems = $_POST['cart_items'];
$totalPrice = $_POST['total_price'];

// Percorre cada item do carrinho e o insere no banco de dados
foreach ($cartItems as $item) {
    $itemName = $item['name'];
    $itemPrice = $item['price'];
    $itemQuantity = $item['quantity'];

    // Prepare the SQL statement
    $sql = "INSERT INTO preco_total (name, price, quantity) VALUES ('$itemName', '$itemPrice', '$itemQuantity')";

    // Execute the SQL statement
    if (!mysqli_query($conexao, $sql)) {
        die("Erro ao inserir item no banco de dados: " . mysqli_error($conexao));
    }
}

// You can also insert the total price into a separate table or update an existing record if needed
// Prepare the SQL statement
$totalPriceSql = "INSERT INTO preco_total (price) VALUES ('$totalPrice')";

// Execute the SQL statement
if (!mysqli_query($conexao, $totalPriceSql)) {
    die("Erro ao inserir o preço total no banco de dados: " . mysqli_error($conexao));
}

// Close the database connection
mysqli_close($conexao);


// Connect to the database and retrieve the total price
// Assuming you have a database connection and a table called 'preco_total' with a column named 'price'
// Adjust the database connection and query according to your setup

// Assuming you have a database connection established
// $conn = mysqli_connect("localhost", "username", "password", "database_name");

// Recupera o último preço total inserido na base de dados
$query = "SELECT price FROM preco_total ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conexao, $query);
$row = mysqli_fetch_assoc($result);

/**Return the total price as a response
echo $totalPrice;
*/
?>

<section id="carrinho-pagamento">
 <div class="modal">
<form class="form">
  <div class="payment--options">
    <h1>preco total:</h1>
    <h2>€<?php echo $totalPrice; ?></h2>
    <h2></h2>
  </div>
  <div class="separator">
    <hr class="line">
    <p>Pague com o cartão de crédito</p>
    <hr class="line">
  </div>
  <div class="credit-card-info--form">
    <div class="input_container">
      <label for="password_field" class="input_label">Nome do usuário</label>
      <input id="password_field" class="input_field" type="text" name="input-name" title="Inpit title" placeholder="Digite seu nome inteiro">
    </div>
    <div class="input_container">
      <label for="password_field" class="input_label">Número do Cartão</label>
      <input id="password_field" class="input_field" type="number" name="input-name" title="Inpit title" placeholder="0000 0000 0000 0000">
    </div>
    <div class="input_container">
      <label for="password_field" class="input_label">Data de validade / CVV</label>
      <div class="split">
      <input id="password_field" class="input_field" type="text" name="input-name" title="Data de validade" placeholder="01/23">
      <input id="password_field" class="input_field" type="number" name="cvv" title="CVV" placeholder="CVV">
    </div>
    </div>
  </div>
    <button class="purchase--btn">Pagar agora</button>
    <button class="purchase--btn"><a href="produtos-menu.php">volte à página anterior</a></button>
</form>
</div>
</section>
 
</body>
</html>
