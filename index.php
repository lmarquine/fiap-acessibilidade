<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gulliver Traveller</title>
    <link rel="stylesheet" type="text/css" href="./src/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="./src/css/accessibility.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./src/js/menu-mobile.js"></script>
    <script src="./src/js/accessibility.js"></script>
    <script type="text/javascript" src="./src/js/controller/validations/form-controller.js"></script>
    <script type="text/javascript" src="./src/js/controller/accessibility/accessibility-controller.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" sizes="60x60" href="./assets/images/icons/favicon.png">
</head>
<header class="header">
    <div class="container">
        <div class="logo">
            <a href="#">
                <img class="logo-img" src="./assets/images/logo.png" alt="Website Logo Gulliver Traveller">
            </a>
        </div>
        <nav id="nav" class="top-nav">
            <button id="btn-mobile"></button>
            <ul id="menu">
                <li><a href="./index.php">Home</a></li>
                <li><a href="./hospedagens.php">Hospedagens</a></li>
                <li><a href="./cadastro.php">Cadastrar Novo Destino</a></li>
                <li><a href="#">Séries</a></li>
            </ul>

            <ul id="accessibility-options">
                <li><a class="button fontSize minus" onclick="fontSize('minus')">A-</a></li>
                <li><a class="button fontSize plus" onclick="fontSize('plus')">A+</a></li>
                <li><a class="button fontSize reset" onclick="resetFontSize()">Reset</a></li>
                <li><a class="button fontSize reset" onclick="contrastColors()">Contraste</a></li>
            </ul>
        </nav>
    </div>
</header>
<body>
<div class="main-content">
    <div class="container">
        <div class="home-slider">
            <div class="slider-item">
                <picture>
                    <source media="(min-width: 768px)" srcset="./assets/images/los-angeles.png">
                    <img src="./assets/images/los-angeles.png" alt="Belo panorama do horizonte de Los Angeles e MacArthur Park durante um dia vibrante.">
                </picture>
            </div>
            <div class="slider-item">
                <picture>
                    <source media="(min-width: 768px)" srcset="./assets/images/sao-paulo.png">
                    <img src="./assets/images/sao-paulo.png" alt="Ponte estaiada em São Paulo, Brasil">
                </picture>
            </div>
        </div>
        <h1>Uma série de destinos para você maratonar</h1>
        <p class="about-places">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="col col1">
            <ul>
                <li><a href="#">Séries</a></li>
                <li><a href="#">Destinos</a></li>
            </ul>
        </div>

        <div class="col col2">
            <ul>
                <li><a href="#">Seja Membro</a></li>
                <li><a href="#">Informações</a></li>
            </ul>
        </div>

        <div class="col col3">
            <ul>
                <li><a href="./lucifer.html">Lucífer</a></li>
                <li><a href="#">O Negócio</a></li>
            </ul>
        </div>

        <div class="col col4">
            <ul>
                <li><a href="#">Política de Cookies</a></li>
                <li><a href="#">Contribuir</a></li>
            </ul>
        </div>

        <div class="copyright">Todos os direitos reservados</div>
    </div>
</footer>

<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>
<script type="text/javascript" src="./src/js/form-validation.js"></script>
<script type="text/javascript" src="./src/js/accessibility.js"></script>
<script type="text/javascript" src="./src/js/slider-home.js"></script>
</body>
</html>
