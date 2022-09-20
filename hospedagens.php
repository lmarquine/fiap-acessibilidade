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

        <div id="hcg-tabs-1" class="tabs-container">

            <div id="tabs-nav">
                <a href="#" data-target="tab_1" class="tabs-menu tabs-menu-active">Trabalho</a>
                <a href="#" data-target="tab_2" class="tabs-menu">Passeio</a>
                <a href="#" data-target="tab_3" class="tabs-menu">Negócios</a>
                <a href="#" data-target="tab_4" class="tabs-menu">Procurar</a>
            </div>

            <div class="tabs-content">
                <div id="tab_1" class="tabs-panel" style="display:block">
                    <div class="flex-content">
                        <h2 class="tab-card-title">As melhores opções para quem está viajando a trabalho:</h2>
                        <div class="place-card">
                            <picture class="place-image">
                                <img src="https://www.logolynx.com/images/logolynx/52/521795dfcc961562c3dd4b99fcb6eb29.jpeg" alt="Ibis" style="width:250px;">
                            </picture>
                            <div class="place-info">
                                <div class="place-name">
                                    <strong>IBIS Styles São Paulo Anhembi</strong>
                                </div>
                                <div class="place-description">
                                    Com um design criativo, baseado no tema "aviação", o ibis Styles São Paulo Anhembi une a praticidade para o trabalho com um espaço receptivo para família por uma ótima relação custo-benefício. Os quartos são super confortáveis e adaptados para pessoas com mobilidade reduzida, com wi-fi grátis e ar condicionado. O restaurante 14 bis serve café da manhã com 40 opções de refeição, e o bar está disponível por 24 horas. Deixe as crianças se divertirem no Espaço Kids. Cães também são bem vindos.
                                </div>
                                <div class="place-review">
                                    <span>Google: 4.3</span>
                                    <a href="https://www.google.com/travel/hotels/ibis%20styles%20s%C3%A3o%20paulo%20anhembi/entity/CgoI8fvBi5ejrpQREAE/reviews?q=ibis%20styles%20s%C3%A3o%20paulo%20anhembi&g2lb=2502548%2C2503771%2C2503781%2C4258168%2C4270442%2C4284970%2C4291517%2C4306835%2C4597339%2C4718358%2C4723331%2C4757164%2C4809518%2C4814050%2C4816977%2C4826689%2C4828448%2C4842756%2C4850737%2C4852066%2C4856937&hl=en-BR&gl=br&ssta=1&rp=EPH7wYuXo66UERDx-8GLl6OulBE4AkAASAHAAQI&ictx=1&sa=X&ved=0CAAQ5JsGahcKEwiYyojHvaL6AhUAAAAAHQAAAAAQBA&utm_campaign=sharing&utm_medium=link&utm_source=htls&ts=CAESABpJCisSJzIlMHg5NGNlNTg4NTkwMjkzMzdiOjB4MTEyOGI5MTk3MTcwN2RmMRoAEhoSFAoHCOYPEAoYAhIHCOYPEAoYAxgBMgIQACoJCgU6A0JSTBoA">Ver Avaliações</a>
                                </div>
                                <div class="place-site">
                                    <a href="https://all.accor.com/hotel/9596/index.pt-br.shtml" target="_blank">Website</a>
                                </div>
                            </div>
                        </div>

                        <div class="place-card">
                            <picture class="place-image">
                                <img src="https://assets.simpleviewinc.com/simpleview/image/upload/crm/spacvb/comfort_hotel_logo0-b6ac26575056a36_b6ac271e-5056-a36a-0ac55172b62962cc.png" alt="Confort" style="width:250px;">
                            </picture>
                            <div class="place-info">
                                <div class="place-name">
                                    <strong>Comfort Ibirapuera</strong>
                                </div>
                                <div class="place-description">
                                    Localizado em Moema, uma das melhores regiões de São Paulo, em frente a Moema do Metro e estamos próximo a ótimos bares e restaurantes, a 1km do Shopping Ibirapuera e Parque do Ibirapuera, e a 3,5km do aeroporto de Congonhas.
                                </div>
                                <div class="place-review">
                                    <span>Google: 4.4</span>
                                    <a href="https://www.google.com/travel/hotels/comfort%20ibirapuera/entity/CgsIu4Opluad1PveARAB/reviews?q=comfort%20ibirapuera&g2lb=2502548%2C2503771%2C2503781%2C4258168%2C4270442%2C4284970%2C4291517%2C4306835%2C4597339%2C4718358%2C4723331%2C4757164%2C4809518%2C4814050%2C4816977%2C4826689%2C4828448%2C4842756%2C4850737%2C4852066%2C4856937&hl=en-BR&gl=br&ssta=1&rp=ELuDqZbmndT73gEQu4Opluad1PveATgCQABIAcABAg&ictx=1&sa=X&ved=0CAAQ5JsGahcKEwiYybOdvaL6AhUAAAAAHQAAAAAQBA&utm_campaign=sharing&utm_medium=link&utm_source=htls&ts=CAESABpJCisSJzIlMHg5NGNlNWEwNTFmZmQyMTJmOjB4ZGVmNzUwZWU2MmNhNDFiYhoAEhoSFAoHCOYPEAkYHRIHCOYPEAkYHhgBMgIQACoJCgU6A0JSTBoA">Ver Avaliações</a>
                                </div>
                                <div class="place-site">
                                    <a href="https://www.reserveatlantica.com.br/hotel/comfort-ibirapuera?utm_source=gmb&utm_medium=organic&utm_campaign=google-my-business" target="_blank">Website</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="tab_2" class="tabs-panel">
                    <div class="flex-content">
                        <h2 class="tab-card-title">As melhores opções para quem está pensando em passeio:</h2>
                        <div class="place-card">
                            <picture class="place-image">
                                <img src="https://www.logolynx.com/images/logolynx/52/521795dfcc961562c3dd4b99fcb6eb29.jpeg" alt="Ibis" style="width:250px;">
                            </picture>
                            <div class="place-info">
                                <div class="place-name">
                                    <strong>IBIS Styles São Paulo Anhembi</strong>
                                </div>
                                <div class="place-description">
                                    Com um design criativo, baseado no tema "aviação", o ibis Styles São Paulo Anhembi une a praticidade para o trabalho com um espaço receptivo para família por uma ótima relação custo-benefício. Os quartos são super confortáveis e adaptados para pessoas com mobilidade reduzida, com wi-fi grátis e ar condicionado. O restaurante 14 bis serve café da manhã com 40 opções de refeição, e o bar está disponível por 24 horas. Deixe as crianças se divertirem no Espaço Kids. Cães também são bem vindos.
                                </div>
                                <div class="place-review">
                                    <span>Google: 4.3</span>
                                    <a href="https://www.google.com/travel/hotels/ibis%20styles%20s%C3%A3o%20paulo%20anhembi/entity/CgoI8fvBi5ejrpQREAE/reviews?q=ibis%20styles%20s%C3%A3o%20paulo%20anhembi&g2lb=2502548%2C2503771%2C2503781%2C4258168%2C4270442%2C4284970%2C4291517%2C4306835%2C4597339%2C4718358%2C4723331%2C4757164%2C4809518%2C4814050%2C4816977%2C4826689%2C4828448%2C4842756%2C4850737%2C4852066%2C4856937&hl=en-BR&gl=br&ssta=1&rp=EPH7wYuXo66UERDx-8GLl6OulBE4AkAASAHAAQI&ictx=1&sa=X&ved=0CAAQ5JsGahcKEwiYyojHvaL6AhUAAAAAHQAAAAAQBA&utm_campaign=sharing&utm_medium=link&utm_source=htls&ts=CAESABpJCisSJzIlMHg5NGNlNTg4NTkwMjkzMzdiOjB4MTEyOGI5MTk3MTcwN2RmMRoAEhoSFAoHCOYPEAoYAhIHCOYPEAoYAxgBMgIQACoJCgU6A0JSTBoA">Ver Avaliações</a>
                                </div>
                                <div class="place-site">
                                    <a href="https://all.accor.com/hotel/9596/index.pt-br.shtml" target="_blank">Website</a>
                                </div>
                            </div>
                        </div>

                        <div class="place-card">
                            <picture class="place-image">
                                <img src="https://assets.simpleviewinc.com/simpleview/image/upload/crm/spacvb/comfort_hotel_logo0-b6ac26575056a36_b6ac271e-5056-a36a-0ac55172b62962cc.png" alt="Confort" style="width:250px;">
                            </picture>
                            <div class="place-info">
                                <div class="place-name">
                                    <strong>Comfort Ibirapuera</strong>
                                </div>
                                <div class="place-description">
                                    Localizado em Moema, uma das melhores regiões de São Paulo, em frente a Moema do Metro e estamos próximo a ótimos bares e restaurantes, a 1km do Shopping Ibirapuera e Parque do Ibirapuera, e a 3,5km do aeroporto de Congonhas.
                                </div>
                                <div class="place-review">
                                    <span>Google: 4.4</span>
                                    <a href="https://www.google.com/travel/hotels/comfort%20ibirapuera/entity/CgsIu4Opluad1PveARAB/reviews?q=comfort%20ibirapuera&g2lb=2502548%2C2503771%2C2503781%2C4258168%2C4270442%2C4284970%2C4291517%2C4306835%2C4597339%2C4718358%2C4723331%2C4757164%2C4809518%2C4814050%2C4816977%2C4826689%2C4828448%2C4842756%2C4850737%2C4852066%2C4856937&hl=en-BR&gl=br&ssta=1&rp=ELuDqZbmndT73gEQu4Opluad1PveATgCQABIAcABAg&ictx=1&sa=X&ved=0CAAQ5JsGahcKEwiYybOdvaL6AhUAAAAAHQAAAAAQBA&utm_campaign=sharing&utm_medium=link&utm_source=htls&ts=CAESABpJCisSJzIlMHg5NGNlNWEwNTFmZmQyMTJmOjB4ZGVmNzUwZWU2MmNhNDFiYhoAEhoSFAoHCOYPEAkYHRIHCOYPEAkYHhgBMgIQACoJCgU6A0JSTBoA">Ver Avaliações</a>
                                </div>
                                <div class="place-site">
                                    <a href="https://www.reserveatlantica.com.br/hotel/comfort-ibirapuera?utm_source=gmb&utm_medium=organic&utm_campaign=google-my-business" target="_blank">Website</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="tab_3" class="tabs-panel">
                    <div class="flex-content">
                        <h2 class="tab-card-title">As melhores opções para quem está viajando a trabalho:</h2>
                        <div class="place-card">
                            <picture class="place-image">
                                <img src="https://cdn2.revistahoteis.com.br/wp-content/uploads/2022/04/Blue-Tree-Premium-Morumbiok.jpg" alt="Blue Tree" style="width:250px;">
                            </picture>
                            <div class="place-info">
                                <div class="place-name">
                                    <strong>Blue Tree Premium Morumbi</strong>
                                </div>
                                <div class="place-description">
                                    O Blue Tree Premium Morumbi é um hotel moderno e com atenção aos detalhes. Para o conforto e praticidade de sua viagem à São Paulo, o hotel está localizado em frente aos Shoppings Morumbi e Market Place, e ao lado da região de escritórios da Berrini. A infraestrutura completa e os serviços com a qualidade Blue Tree vão tornar sua estada ou evento ainda mais especial. Esperamos por você!
                                </div>
                                <div class="place-review">
                                    <span>Google: 4.4</span>
                                    <a href="https://www.google.com/travel/hotels/Blue%20Tree%20Premium%20Morumbi/entity/CgsIjseC6KWu-4PdARAB/reviews?q=Blue%20Tree%20Premium%20Morumbi&g2lb=2502548%2C2503771%2C2503781%2C4258168%2C4270442%2C4284970%2C4291517%2C4306835%2C4597339%2C4718358%2C4723331%2C4757164%2C4809518%2C4814050%2C4816977%2C4826689%2C4828448%2C4842756%2C4850737%2C4852066%2C4856937&hl=en-BR&gl=br&ssta=1&rp=EI7HguilrvuD3QEQjseC6KWu-4PdATgCQABIAcABAg&ictx=1&sa=X&ved=0CAAQ5JsGahcKEwjgzc79vqL6AhUAAAAAHQAAAAAQBA&utm_campaign=sharing&utm_medium=link&utm_source=htls&ts=CAESCgoCCAMKAggDEAEaSQorEicyJTB4OTRjZTUwYzM4MzQ0MmRmYjoweGRkMDdlZDcyNWQwMGEzOGUaABIaEhQKBwjmDxAMGBcSBwjmDxAMGBgYATICEAAqCQoFOgNCUkwaAA">Ver Avaliações</a>
                                </div>
                                <div class="place-site">
                                    <a href="https://all.accor.com/hotel/9596/index.pt-br.shtml" target="_blank">Website</a>
                                </div>
                            </div>
                        </div>

                        <div class="place-card">
                            <picture class="place-image">
                                <img src="https://www.uslesquin.fr/wp-content/uploads/2020/04/logo-resultat-hotel-mercure.png" alt="Hotel Mercure" style="width:250px;">
                            </picture>
                            <div class="place-info">
                                <div class="place-name">
                                    <strong>Mercure São Paulo Pamplona</strong>
                                </div>
                                <div class="place-description">
                                    Se você procura um hotel em São Paulo confortável para sua viagem de negócios ou aproveitar a cidade ao máximo, o Mercure São Paulo Pamplona é para você. Os quartos são espaçosos e tem uma decoração moderna, com opções de room office. Todos climatizados e com wi-fi grátis. O Restaurante Le Jadys serve o melhor da cozinha internacional em um agradável ambiente. Faça sua reunião em nossa equipada sala de eventos, e aproveite da nossa área de lazer completa com piscina, academia e sauna para relaxar.
                                </div>
                                <div class="place-review">
                                    <span>Google: 4.3</span>
                                    <a href="https://www.google.com/travel/hotels/Mercure%20S%C3%A3o%20Paulo%20Pamplona/entity/CgoIxMuD0oPIjsULEAE/reviews?q=Mercure%20S%C3%A3o%20Paulo%20Pamplona&g2lb=2502548%2C2503771%2C2503781%2C4258168%2C4270442%2C4284970%2C4291517%2C4306835%2C4597339%2C4718358%2C4723331%2C4757164%2C4809518%2C4814050%2C4816977%2C4826689%2C4828448%2C4842756%2C4850737%2C4852066%2C4856937&hl=en-BR&gl=br&ssta=1&rp=EMTLg9KDyI7FCxDEy4PSg8iOxQs4AkAASAHAAQI&ictx=1&sa=X&ved=0CAAQ5JsGahcKEwjo0u2uv6L6AhUAAAAAHQAAAAAQAw&utm_campaign=sharing&utm_medium=link&utm_source=htls&ts=CAESCgoCCAMKAggDEAEaSAoqEiYyJDB4OTRjZTU5YzQ1NGVmOWZjZDoweGI4YTNhNDAzYTQwZTVjNBoAEhoSFAoHCOYPEAsYGxIHCOYPEAsYHBgBMgIQACoJCgU6A0JSTBoA">Ver Avaliações</a>
                                </div>
                                <div class="place-site">
                                    <a href="https://www.reserveatlantica.com.br/hotel/comfort-ibirapuera" target="_blank">Website</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="tab_4" class="tabs-panel">
                    <div class="flex-content">
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
                    </div>
                </div>
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

<script>
    $(function() {
        $("#tabs-nav a").click(function(event) {
            event.preventDefault();
            $("#tabs-nav a").removeClass("tabs-menu-active");
            $(this).addClass("tabs-menu-active");
            $(".tabs-panel").hide();
            var tab_id = $(this).data("target");
            $("#"+tab_id).fadeIn();
        });
    });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0JIU3EgyAVWBLPWTEzAUptFMZ6JrCgpk&callback=initMap&libraries=places&v=weekly" defer></script>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script type="text/javascript" src="./src/js/accessibility.js"></script>
<script type="text/javascript" src="./src/js/hotel-finder.js"></script>
</body>
</html>