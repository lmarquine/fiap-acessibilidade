<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gulliver Traveller</title>
    <link rel="stylesheet" type="text/css" href="./src/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="./src/css/hospedagens.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./src/js/menu-mobile.js"></script>
    <script type="text/javascript" src="./src/js/controller/validations/form-controller.js"></script>
    <script type="text/javascript" src="./src/js/controller/accessibility/accessibility-controller.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" sizes="60x60" href="./assets/images/icons/favicon.png">
</head>
<header class="header">
    <div class="container">
        <div class="logo">
            <a href="/">
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
    <div class="container hospedagens">
        <h1>Hospedagens</h1>

        <div class="featured">
            <h2 class="title">Top Hosts</h2>
            <p class="description">Aqui você encontra as melhores dicas de onde se hospedar em várias cidades</p>
        </div>

        <div class="hotel-search">
            <div id="findhotels">Procure hoteis em:</div>

            <div id="locationField">
                <input id="autocomplete" placeholder="Digite o nome de uma cidade" type="text" />
            </div>

            <div id="controls">
                <select id="country">
                    <option value="all">All</option>
                    <option value="au">Australia</option>
                    <option value="br" selected>Brazil</option>
                    <option value="ca">Canada</option>
                    <option value="fr">France</option>
                    <option value="de">Germany</option>
                    <option value="mx">Mexico</option>
                    <option value="nz">New Zealand</option>
                    <option value="it">Italy</option>
                    <option value="za">South Africa</option>
                    <option value="es">Spain</option>
                    <option value="pt">Portugal</option>
                    <option value="us">U.S.A.</option>
                    <option value="uk">United Kingdom</option>
                </select>
            </div>
        </div>

        <div class="results">
            <div id="map"></div>

            <div id="listing">
                <table id="resultsTable">
                    <tbody id="results"></tbody>
                </table>
            </div>
        </div>

        <div style="display: none">
            <div id="info-content">
                <table>
                    <tr id="iw-url-row" class="iw_table_row">
                        <td id="iw-icon" class="iw_table_icon"></td>
                        <td id="iw-url"></td>
                    </tr>
                    <tr id="iw-address-row" class="iw_table_row">
                        <td class="iw_attribute_name">Address:</td>
                        <td id="iw-address"></td>
                    </tr>
                    <tr id="iw-phone-row" class="iw_table_row">
                        <td class="iw_attribute_name">Telephone:</td>
                        <td id="iw-phone"></td>
                    </tr>
                    <tr id="iw-rating-row" class="iw_table_row">
                        <td class="iw_attribute_name">Rating:</td>
                        <td id="iw-rating"></td>
                    </tr>
                    <tr id="iw-website-row" class="iw_table_row">
                        <td class="iw_attribute_name">Website:</td>
                        <td id="iw-website"></td>
                    </tr>
                </table>
            </div>
        </div>

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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0JIU3EgyAVWBLPWTEzAUptFMZ6JrCgpk&callback=initMap&libraries=places&v=weekly" defer></script>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script type="text/javascript" src="./src/js/accessibility.js"></script>
<script type="text/javascript" src="./src/js/hotel-finder.js"></script>
</body>
</html>