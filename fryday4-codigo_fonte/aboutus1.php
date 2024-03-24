<!DOCTYPE html>
<html lang="pt-pt"><!-- Linguangem do site -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link para o icone no top do site (browser)-->
    <link rel="icon" type="image/x-icon" href="img/logo-2-white-ico.ico">
    <title>FryDay</title>
</head>

<body>
    <?php
    include_once("header.php");
    ?>

    <section id="about-us-section1">

        <div class="text-about-us-fryday">
            <div class="title-section1">
                <h5>Sejam bem-vindos à Fryday, onde cada trinca é uma explosão de alegria!</h5>
            </div>
        </div>
        <div class="img-about-us-fryday">
        </div>

    </section>

    <section id="about-us-section2">

        <div class="title1-about-us-fryday">
            <div class="title-section2">
                <h2>Sobre Nós</h2>
            </div>
        </div>
        <div class="text2-about-us-fryday">
            <div class="text-section2">
                <p>Fryday, o website de food delivery fundado em 2023, revolucionou a forma como desfrutamos da
                    comida aos finais de semana. Fryday tornou-se o destino perfeito para satisfazer todos os desejos
                    gastronômicos sem sair de casa. </p>
            </div>
        </div>
        <div class="background-color-about-us"></div>

    </section>

    <section id="about-us-section3">

        <div class="left-background-img-about-us"></div>
        <div class="text-section3">
            <div class="text3-about-us-fryday">
                <p>Na FryDay, a nossa missão vai além de apenas proporcionar uma experiência excepcional de fast food
                    aos nossos clientes. Nós nos comprometemos a oferecer alimentos deliciosos, frescos e de alta
                    qualidade, pois acreditamos que a alimentação é uma parte fundamental do bem-estar e do prazer de
                    viver.</p>
                <p>Buscamos constantemente aperfeiçoar nossos processos, desde a seleção dos ingredientes até a entrega
                    final, para garantir que cada refeição seja uma verdadeira explosão de sabor. Valorizamos a
                    excelência em tudo o que fazemos e trabalhamos incansavelmente para superar as expectativas dos
                    nossos clientes.</p>
                <p>Além disso, entendemos a importância da conveniência em um mundo acelerado. Por isso, nossa
                    plataforma de delivery foi cuidadosamente desenvolvida para ser fácil de usar, rápida e eficiente.
                    Queremos que nossos clientes desfrutem da comodidade de receber seus pratos favoritos no conforto de
                    casa, sem abrir mão da qualidade e do sabor.</p>
            </div>
        </div>

    </section>

    <section id="about-us-section4">

        <div class="title2-about-us-fryday">
            <div class="title-section4">
                <h2>Nossa História</h2>
            </div>
        </div>

        <div class="text4-about-us-fryday">
            <div class="text-section4">
                <p>Um dos principais motivos que nos incentivou a criar o website foi o desejo de expandir os nossos
                    conhecimentos na área de web design. Ao colocarmos os nossos conhecimentos em prática durante o
                    desenvolvimento do website, enfrentamos desafios e aprendemos a superá-los, adquirindo conhecimento
                    valioso em áreas como layout responsivo, otimização de desempenho, acessibilidade e compatibilidade
                    entre diferentes dispositivos e navegadores. </p>
                <p>Fryday é o nome do nosso website de food delivery, mais precisamente, Fast Food delivery. O nome
                    surgiu de um trocadilho entre a junção de Fry(fritar) - Day(dia). Tivemos outras ideias de nomes,
                    mas foram descartadas por considerarmos menos criativas e ajustadas ao que pretendíamos.</p>
                <p>Agradecemos a todos que se juntaram a nós nessa jornada e convidamos você a experimentar o Fryday,
                    onde a conveniência, a qualidade e o sabor se encontram em uma plataforma de delivery de comida
                    feita com amor e dedicação.</p>
            </div>
        </div>


    </section>

    <section id="about-us-section5">

        <div class="title3-about-us-fryday">
            <div class="title-section5">
                <h2>Equipa</h2>
            </div>
        </div>
        <div class="equipa-fryday">
            <div class="miguel-martins-equipa">
                <img src="img/pic-miguel.jpeg" alt="miguel" style=" height: 10rem;  width: 10rem; border-radius:50%;">
                <div class="text-section5">
                    <h4>Miguel Martins</h4>
                    <h5>Desenvolvedor Web</h5>
                </div>
            </div>
            <div class="nathan-garcia-equipa">
                <img src="img/pic-nathan.jpeg" alt="nathan" style=" height: 10rem;  width: 10rem; border-radius:50%;">
                <div class="text-section5">
                    <h4>Nathan Garcia</h4>
                    <h5>Desenvolvedor Web</h5>
                </div>
            </div>
        </div>

    </section>


    <?php
    include_once("footer.html");
    ?>
</body>

</html>


<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap");
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');


    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    html {
        scroll-behavior: smooth;
    }


    /*section 1*/
    #about-us-section1 {
        height: 90vh;
        display: flex;
        width: 100%;
    }


    .text-about-us-fryday {
        background-color: #05a751;
        display: flex;
        width: 100%;
        align-items: center;
        justify-content: center;
    }

    .title-section1 {
        width: 500px;
    }

    .title-section1 h5 {
        font-size: 2.5rem;
        font-weight: 600;
        text-transform: uppercase;
        color: #fff;
    }

    .img-about-us-fryday {
        background-image: url('img/img-about-us-4.jpg');
        /* Define uma imagem de fundo para o elemento*/
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100%;
    }




    /*section 2*/
    #about-us-section2 {
        height: 100vh;
        width: 100%;
        display: flex;
        justify-content: space-between;
    }

    .title-section2 {
        transform: rotate(270deg);
    }

    .title1-about-us-fryday {
        width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #F99F24;
    }

    .title1-about-us-fryday h2 {
        text-transform: uppercase;
        font-size: 4rem;
        font-weight: 800;
    }


    .text2-about-us-fryday {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }


    .text-section2 {
        width: 40%;
    }

    .text-section2 p {
        align-items: justify;
        text-transform: uppercase;
        font-size: 1rem;
    }

    .background-color-about-us {
        background: #0c6044;
        width: 50%;
    }




    /*section 3*/
    #about-us-section3 {
        height: 100vh;
        width: 100%;
        display: flex;
        justify-content: space-between;
    }


    .left-background-img-about-us {
        width: 50%;
        background-image: url('img/img-about-us-5.jpg');
        /* Define uma imagem de fundo para o elemento*/
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }


    .text-section3 {
        width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #05a751;
    }


    .text3-about-us-fryday {
        width: 70%;
        text-transform: uppercase;
    }

    .text3-about-us-fryday p {
        color: #fff;
    }

    /*section 4*/
    #about-us-section4 {
        height: 110vh;
        width: 100%;
        display: flex;
    }


    .title2-about-us-fryday {
        width: 25%;
        background-color: #0c6044;
        display: flex;
        justify-content: center;
        align-items: center;
    }


    .title-section4 {
        transform: rotate(270deg);
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .title-section4 h2 {
        text-transform: uppercase;
        font-size: 2rem;
        font-weight: 800;
        color: #fff;
    }


    .text4-about-us-fryday {
        width: 70%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .text-section4 {
        width: 60%;

    }

    .text-section4 p {
        font-size: 1.2rem;
        font-weight: 200;
    }

    /*section 5*/
    #about-us-section5 {
        height: 60vh;
        width: 100%;
        display: flex;
    }

    .title3-about-us-fryday {
        width: 30%;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .title-section5 h2 {
        text-transform: uppercase;
        font-size: 2rem;
        font-weight: 800;
    }

    .equipa-fryday {
        display: flex;
        justify-content: center;
        align-items: center;
        justify-content: space-around;
        width: 100%;
    }


    .nathan-garcia-equipa,
    .miguel-martins-equipa {
        justify-content: space-around;
        display: flex;
        width: 50%;
        align-items: center;
    }


    .text-section5 h4 {
        font-weight: 700;
        font-size: 2rem;
        color: #0c6044;
        text-transform: uppercase;
    }
</style>