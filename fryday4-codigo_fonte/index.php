<!DOCTYPE html>
<html lang="pt-pt"> <!-- Linguagem da pagina web -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link para o icone no top do site (browser)-->
    <link rel="icon" type="image/x-icon" href="img/logo-2-white-ico.ico">

    <!-- Site de icones -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Ligação para o ficheiro css-->
    <link rel="stylesheet" href="style.css">

    <title>FryDay</title> <!-- Titulo da página-->
</head>

<body>
 <!-- chama o header menu do ficheiro header.php -->
    <?php
    include_once("header.php");
    ?>

    
    <!-- header da página-->
    <section id="header">
        <div class="text-exp">
            <h1 ><span>Fry</span>day</h1>
            <h4>Sabor que vai te deixar fritado!</h4>
            <p>No Fryday priorizamos a entrega rápida e confiável. O nosso serviço de entrega é eficiente e garante que a sua
                comida chega fresca e quente, garantindo uma experiência perfeita. </p>
        </div>

        <div class="img-header">
            <img src="img/burger-header.png" alt="">
        </div>
    </section>




    <!-- secção para os icones que redirecionam à página menu -->
    <section id="little-container">

        <div class="icon-menu-button">
            <a href="produtos-menu.php#productsMenu"><button><i class="fa-solid fa-burger icon-menu-btn"></i>hamburger</button></a>
        </div>

        <div class="icon-menu-button">
            <a href="produtos-menu.php#productsMenu"><button><i class="fa-solid fa-hotdog icon-menu-btn"></i>hot-dog</button></a>
        </div>

        <div class="icon-menu-button">
            <a href="produtos-menu.php#productsMenu"><button><i class="fa-solid fa-pizza-slice icon-menu-btn"></i>pizza</button></a>
        </div>

    </section>





    > <!-- secção para demonstração dos dois produtos dividido em dois containers-->
    <section id="two-containers">
 
        <div class="first-container">
            <div data-aos="zoom-in-right" class="title-sub-container">
                <h2>CheeseBurger</h2>
                <h5>O sabor supremo em cada trinca</h5>
                <h6>€ 12.99</h6>
                <a class="button-encomenda" href="produtos-menu.php#productsMenu">Encomendar</a>
            </div>

            <div class="container-img-cheeseburger">
                <img src="img/burguer1-cheese.png" style="height:200px; width:250px" alt="cheeseburger">
            </div>
        </div>
      

        <div class="second-container">

            <div class="title-sub-container">
                <h2>Pepperoni Pizza</h2>
                <h5>Explosão de sabor no seu paladar!</h5>
                <h6>€ 15.99</h6>
                <a class="button-encomenda" href="produtos-menu.php#productsMenu">Encomendar</a>
            </div>

            <div class="container-img-cheeseburger">
                <img src="img/pizza-pepperoni.png" style="height:200px; width:200px" alt="cheeseburger">
            </div>

        </div>
    </section>


    > <!-- secção de sobre Nós -->
    <section id="about-us">

        <div class="container-about-us-section">
            <h6>Um pouco sobre nós!</h6>
            <h1>FryDay</h1>
            <div class="text-container-about">
                <p>Bem-vindo ao Fryday! Somos o seu destino online para entrega rápida de comida deliciosa. A nossa missão
                    é tornar a experiência de pedir fast food mais conveniente, saborosa e satisfatória.</p>
                <p>No Fryday, entendemos que deseja saborear um hambúrguer suculento, uma pizza quentinha
                    ou uma porção generosa de batatas fritas no conforto da sua casa. É por isso que reunimos uma
                    seleção dos melhores restaurantes de fast food da região para trazer até si as opções mais
                    apetitosas.</p>
            </div>

            <a href="aboutus.php"><button class="cardButtonContact">Saiba mais</button></a>
        </div>

        <div class="img-about-us">
            <img src="img/fryday-big.png" alt="fryday">
        </div>
    </section>


    > <!-- secção de contacto -->
    <section id="mini-contact">
        <div class="mini-containerContact">
            <h1>Mande-nos o seu FeedBack</h1>
        </div>
        <div class="mini-containerContactForm">
            <form method="POST">
                <div class="mini-col-75">
                    <input type="text" id="name_input" name="name_input" placeholder="Nome" required>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                    <textarea id="message" name="message" rows="4" placeholder="Mensagem" required></textarea>
                </div>
                <button class="btnMiniContactForm"><input  type="submit" value="Enviar"></button>
            </form>
        </div>
    </section>

<!-- secção para a demonstração de quatro comentários -->
    <section id="review">
        <div class="tittle_review">
            <h1>Comentários</h1>
        </div>
        <div class="container-review">
            <div class="card_review"> <!-- Comentarios Miguel -->
                <div class="header_review">
                    <div class="image_1"></div>
                    <div>
                        <div class="stars"> <!-- Estrelas -->
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </div>
                        <p class="name">Miguel Martins</p>
                    </div>
                </div>

                <p class="message">
                    A entrega foi realizada dentro do prazo estimado, o que foi um ponto positivo.
                    Além disso, a embalagem chegou em boas condições.
                </p>
            </div>

            <div class="card_review"> <!-- Comentarios Nathan -->
                <div class="header_review">
                    <div class="image_2"></div>
                    <div>
                        <div class="stars">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </div>
                        <p class="name">Nathan Garcia</p>
                    </div>
                </div>

                <p class="message">
                    A minha experiência com o Fryday Food Delivery foi simplesmente incrível! Tudo, desde o processo de
                    pedido até à entrega, superou as minhas expectativas.
                </p>
            </div>
        </div>

        <div class="container-review"> <!-- Comentarios Lara -->
            <div class="card_review">
                <div class="header_review">
                    <div class="image_3"></div>
                    <div>
                        <div class="stars">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </div>
                        <p class="name">Lara Garcia</p>
                    </div>
                </div>

                <p class="message">
                    Decidi experimentar o serviço de entrega de comida do Fryday e a minha experiência foi mediana.
                </p>
            </div>

            <div class="card_review"> <!-- Comentarios Tiago -->
                <div class="header_review">
                    <div class="image_4"></div>
                    <div>
                        <div class="stars">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </div>
                        <p class="name">Tiago Sousa</p>
                    </div>
                </div>

                <p class="message">
                    Fryday Food Delivery é simplesmente fantástica! Desde o momento em que fiz o pedido até à primeira
                    trinca.
                </p>
            </div>
        </div>
    </section>



    <!-- chama o footer do ficheiro footer.hmtl -->
    <?php
    include_once("footer.html");
    ?>
</body>

</html>


<!-- Codigo para o emails -->
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // configuracao
    $smtpUsername = "mail@epbjc-porto.net"; // configuração do utilizador/password que faz o envio do email - não alterar
    $smtpPassword = "enviaremailporto";


    $nameInpt = $_POST["name_input"];
    $msg = $_POST['message']; // Obter a mensagem do campo de entrada



    $emailFrom = "mail@epbjc-porto.net"; // não mudar este email
    $emailFromName = $nameInpt; // configuração do nome aparecer no envio do email

    // configuração dos dados para onde o email vai ser enviado
    $emailTo = "fryday2023@gmail.com";
    $emailToName = "FryDay Company";


    // utilização do PHPMailer
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0; // DEBUG - 0 = off / 1 = client messages / 2 = client and server
    $mail->Host = "mail.epbjc-porto.net";
    $mail->Port = 465; // porta de ligação SMTP Port: 465
    $mail->SMTPSecure = 'ssl'; // protocolo de segurança
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;
    $mail->setFrom($emailFrom, $emailFromName);
    $mail->addAddress($emailTo, $emailToName);
    $mail->Subject = 'Questoes'; // configuração do assunto / subject

    $mail->msgHTML("Mensagem: $msg"); // usar a mensagem digitada como corpo do email

    $mail->AltBody = 'Mensagem em HTML não suportada ';
    // $mail->addAttachment('images/phpmailer_mini.png'); //enviar imagem em anexo

    // enviar o email e mostrar msg de sucesso ou erro
    if (!$mail->send()) {
        echo "Erro no envio de mensagem: " . $mail->ErrorInfo;
    } else {
        function_alert("Obrigado por entrar em contacto connosco! Entraremos em contacto consigo em breve.");
    }
}
function function_alert($msg)
{
    echo "<script type='text/javascript'>alert('$msg');</script>";
}


  AOS.init();

?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>