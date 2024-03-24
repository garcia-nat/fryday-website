<!DOCTYPE html>
<html lang="pt-pt"> <!-- Linguangem do site -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Link para o icone no top do site (browser)-->
    <link rel="icon" type="image/x-icon" href="img/logo-2-white-ico.ico">

    <!-- Ligação ao ficheiro CSS -->
    <link rel="stylesheet" href="style.css" />


    <!-- Link para o site de icones -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />


    <title>FryDay</title> <!-- Ttulo da pagina -->

</head>

<body>
    <?php
    include_once("header.php");
    ?>

    <br><br><br>
    <div class="containerContact1">
        <h1>Siga-nos nas redes sociais</h1>
    </div>
    <!-- Cartao de rede social (instagram) -->
    <div class="containerCardContacts">

        <div class="cardContacs">
            <div class="cardImageContacts">
                <img src="img/insta.jpg" alt="">
            </div>
            <div class="cardContent">
                <h1 class="cardDetails">Instagram</h1>
                <p class="excerpt">Visite a nossa rede social onde publicamos posts e reportagens sobre os nossos
                    produtos. Pode entrar em contacto connosco através desta rede social para qualquer tipo de
                    suporte e ajuda. Não se esqueça de nos seguir para não perder novas oportunidades de compra que
                    possam surgir!</p>
                <br>
                <button class="cardButtonContact"><a href="https://www.instagram.com/masterschrute/"></a>
                    Visite-nos</button>
            </div>
        </div>
    </div>

    <!-- Cartao de rede social (facebook)-->
    <div class="containerCardContacts">
        <div class="cardContacs">
            <div class="cardImageContacts">
                <img src="img/facebook.jpg" alt="">
            </div>
            <div class="cardContent">
                <h1 class="cardDetails">Facebook</h1>
                <p class="excerpt">Visite a nossa rede social onde publicamos vídeos dos nossos produtos. Não se esqueça
                    de
                    nos seguir para não perder novas oportunidades de compra que possam surgir!</p>
                <br>
                <button class="cardButtonContact ">Visite-nos</button>
            </div>
        </div>
    </div>


    <!-- Contact Form -->
    <div class="containerContact">
        <h1>Contacte-nos</h1>
    </div>
    <div class="containerContactForm">
        <form method="post">
            <div class="col-75">
                <input type="text" id="name_input" name="name_input" placeholder="Nome" required>
                <input type="text" id="phone_input" name="phone_input" placeholder="Telemóvel" required>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <textarea id="message" name="message" placeholder="Mensagem" rows="4" cols="50"></textarea><br><br>
            </div>
            <input type="submit" value="Enviar">
        </form>
    </div>


    <!-- Acordeao -->
    <div class="acordeao">
        <div class="containerContact3">
            <h1>Políticas</h1><br>
        </div>
        <div id="faq">
            <ul>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h2>Termos e Condições</h2>
                    <p>Este site é operado pela FryDay. Em todo o site, os termos “nós”, “nos” e “nosso” se referem à
                        FryDay. Oferecemos este site, incluindo todas as informações, ferramentas e serviços disponíveis
                        neste site para você, o usuário, condicionado à sua aceitação de todos os termos, condições,
                        políticas e avisos aqui declarados.
                        <br><br>Ao visitar nosso site e/ou comprar algo de nós, você se envolve em nosso “Serviço” e
                        concorda em cumprir os seguintes termos e condições (“Termos de Serviço”, “Termos”), incluindo
                        os termos e condições e políticas adicionais aqui referenciado e/ou disponível por hiperlink.
                        Estes Termos de Serviço se aplicam a todos os usuários do site, incluindo, sem limitação,
                        usuários que são navegadores, fornecedores, clientes, comerciantes e/ou contribuidores de
                        conteúdo.
                        <br><br>Por favor, leia estes Termos de Serviço cuidadosamente antes de acessar ou usar nosso
                        site. Ao acessar ou usar qualquer parte do site, você concorda em ficar vinculado a estes Termos
                        de Serviço. Se você não concordar com todos os termos e condições deste contrato, não poderá
                        acessar o site ou usar quaisquer Serviços. Se estes Termos de Serviço forem considerados uma
                        oferta, a aceitação é expressamente limitada a estes Termos de Serviço.
                        <br><br>Quaisquer novos recursos ou ferramentas adicionados à loja atual também estarão sujeitos
                        aos Termos de Serviço. Você pode rever a versão mais atual dos Termos de Serviço a qualquer
                        momento nesta página. Reservamo-nos o direito de atualizar, alterar ou substituir qualquer parte
                        destes Termos de Serviço, publicando atualizações e/ou alterações em nosso site. É sua
                        responsabilidade verificar esta página periodicamente quanto a alterações. Seu uso contínuo ou
                        acesso ao site após a publicação de quaisquer alterações constitui a aceitação dessas
                        alterações.
                        <br><br>SEÇÃO 1 - CONDIÇÕES GERAIS
                        <br><br>Reservamo-nos o direito de recusar o Serviço a qualquer pessoa, por qualquer motivo, a
                        qualquer momento.
                        <br>Você entende que seu conteúdo (não incluindo informações de cartão de crédito) pode ser
                        transferido sem criptografia e envolve (a) transmissões por várias redes; e (b) alterações para
                        conformidade e adaptação aos requisitos técnicos de conexão de redes ou dispositivos. As
                        informações do cartão de crédito são sempre criptografadas durante a transferência pelas redes.
                        <br>Você concorda em não reproduzir, duplicar, copiar, vender, revender ou explorar qualquer
                        parte do Serviço, uso do Serviço ou acesso ao Serviço ou qualquer contato no site através do
                        qual o Serviço é fornecido, sem nossa permissão expressa por escrito .
                        <br>Os títulos usados neste acordo são incluídos apenas para conveniência e não limitarão ou
                        afetarão estes Termos.
                        <br><br>SEÇÃO 2 - MODIFICAÇÕES AO SERVIÇO E PREÇOS
                        <br><br>Os preços dos nossos produtos estão sujeitos a alterações sem aviso prévio.
                        <br>Reservamo-nos o direito de, a qualquer momento, modificar ou descontinuar o Serviço (ou
                        qualquer parte ou conteúdo dele) sem aviso prévio a qualquer momento.
                        <br>Não seremos responsáveis perante você ou terceiros por qualquer modificação, alteração de
                        preço, suspensão ou descontinuação do Serviço.
                        <br><br>SEÇÃO 3 - LINKS DE TERCEIROS
                        <br><br>Certos conteúdos, produtos e Serviços disponíveis através do nosso Serviço podem incluir
                        materiais de terceiros.
                        <br>Os links de terceiros neste site podem direcioná-lo para sites de terceiros que não são
                        afiliados a nós. Não somos responsáveis por examinar ou avaliar o conteúdo ou precisão e não
                        garantimos e não teremos qualquer obrigação ou responsabilidade por quaisquer materiais ou sites
                        de terceiros, ou por quaisquer outros materiais, produtos ou serviços de terceiros.
                    </p>

                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h2>Política e Privacidade</h2>
                    <p> Todos os direitos autorais desse texto são reservados à FryDay. O modelo é meramente referencial
                        e, por isso, não nos responsabilizamos por quaisquer prejuízos decorrentes de sua utilização.
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <br><br>






    <?php
    include_once("footer.html");
    ?>
</body>

</html>


<!-- Codigo para o enviar os emails -->
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
    $phoneInpt = $_POST["phone_input"];
    $msg = $_POST['message']; // Obter a mensagem do campo de entrada



    $emailFrom = "mail@epbjc-porto.net"; // não mudar este email
    $emailFromName = $nameInpt; // configuração do nome aparecer no envio do email

    // configuração dos dados para onde o email vai ser enviado
    $emailTo = "fryday2023@gmail.com";
    $emailToName = "FryDay";


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

    $mail->msgHTML("Mensagem: $msg <br> Telemóvel: $phoneInpt"); // usar a mensagem digitada como corpo do email


    $mail->AltBody = 'Mensagem em HTML não suportada ';
    // $mail->addAttachment('images/phpmailer_mini.png'); //enviar imagem em anexo

    // enviar o email e mostrar msg de sucesso ou erro
    if (!$mail->send()) {
        echo "Erro no envio de mensagem: " . $mail->ErrorInfo;
    } else {
        function_alert("Obrigado por entrar em contato conosco! Entraremos em contato contigo em breve.");
    }
}
function function_alert($msg)
{
    echo "<script type='text/javascript'>alert('$msg');</script>";
}


?>