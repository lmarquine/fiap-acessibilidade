<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gulliver Traveller</title>
    <link rel="stylesheet" type="text/css" href="./src/css/style.css"/>
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
            <a href="#">
                <img class="logo-img" src="./assets/images/logo.png" alt="Website Logo Gulliver Traveller">
            </a>
        </div>
        <nav id="nav" class="top-nav">
            <button id="btn-mobile"></button>
            <ul id="menu">
                <li><a href="./index.html">Home</a></li>
                <li><a href="#">Destinos</a></li>
                <li><a href="./cadastro.html">Cadastrar Novo Destino</a></li>
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
    <div class="container register">
        <h1>Cadastrar um novo Destino</h1>

        <form name="register" id="form_register" method="post" action="#">
            <h3 class="form-register__sesssion title">Informações</h3>
            <fieldset class="fieldset fieldset-attraction">
                <div class="field-block field-name">
                    <label class="form-label required" for="name">Nome do ponto turístico</label>
                    <input class="field field-attraction field-attraction--name required focused"
                           name="name"
                           type="text"
                           id="name"
                           placeholder="Nome da atração"
                           autofocus
                           aria-required="true"/>
                </div>

                <div class="field-block field-country">
                    <label class="form-label required" for="country">País</label>
                    <input list="country__options"
                           id="country"
                           class="field field-attraction field-attraction__country country required"
                           name="country"
                           placeholder="Selecione um país"
                           autocomplete="no"
                           aria-required="true"/>
                    <datalist id="country__options">
                        <option class="option brazil"
                                data-value="0"
                                value="Brasil">
                        <option class="option usa"
                                data-value="1"
                                value="Estados Unidos">
                        <option class="option england"
                                data-value="2"
                                value="Inglaterra">
                    </datalist>
                </div>

                <div class="field-block field-street">
                    <label class="form-label required" for="street">Rua</label>
                    <input class="field field-attraction field-attraction__address street required"
                           name="street"
                           type="text"
                           id="street"
                           placeholder="Rua"
                           aria-required="true"/>
                </div>

                <div class="field-block field-number">
                    <label class="form-label required" for="number">Número</label>
                    <input class="field field-attraction field-attraction__address number required"
                           name="number"
                           type="text"
                           id="number"
                           placeholder="Número"
                           aria-required="true"/>
                </div>

                <div class="field-block field-neighborhood">
                    <label class="form-label required" for="neighborhood">Bairro</label>
                    <input class="field field-attraction field-attraction__address neighborhood required"
                           name="neighborhood"
                           type="text"
                           id="neighborhood"
                           placeholder="Bairro"
                           aria-required="true"/>
                </div>

                <div class="field-block field-city">
                    <label class="form-label required" for="city">Cidade</label>
                    <input class="field field-attraction field-attraction__address city required"
                           name="city"
                           type="text"
                           id="city"
                           placeholder="Cidade"
                           aria-required="true"/>
                </div>

            </fieldset>

            <h3 class="form-register__sesssion title">Contato</h3>
            <fieldset class="fieldset fieldset-contact">
                <label class="form-label" for="website">Website</label>
                <input type="url"
                       class="field field-contact__website"
                       id="website"
                       placeholder="Website"/>

                <label class="form-label" for="email">E-mail</label>
                <input type="email"
                       class="field field-contact__email"
                       id="email"
                       placeholder="Email"/>

                <label class="form-label" for="telephone">Telefone</label>
                <input type="tel"
                       class="field field-telephone"
                       name="telephone"
                       id="telephone"
                       placeholder="Telefone"/>
            </fieldset>

            <h3 class="form-register__sesssion title">Funcionamento</h3>
            <fieldset class="fieldset fieldset-time">
                <div class="from">
                    <label class="form-label required" for="from">Aberto desde</label>
                    <input class="field field-time field-time__hour"
                           name="from"
                           type="date"
                           id="from"
                           aria-required="true"/>
                </div>

                <div class="to">
                    <label class="form-label required" for="to">Aberto até</label>
                    <input class="field field-time field-time__hour"
                           name="to"
                           type="date"
                           id="to"
                           aria-required="true"/>
                </div>
            </fieldset>

            <h3 class="form-register__sesssion title">Horários e preço</h3>
            <fieldset class="fieldset fieldset-oppened">
                <div class="fieldset fieldset-hours">
                    <div class="fieldset-hour-open">
                        <label class="form-label required" for="open">Horário de abertura</label>
                        <input class="field field-time fieldset-hours-open"
                               name="open"
                               type="time"
                               id="open"
                               aria-required="true"/>
                    </div>

                    <div class="fieldset-hour-close">
                        <label class="form-label required" for="close">Horário de fechamento</label>
                        <input class="field field-time fieldset-hours-close"
                               name="close"
                               type="time"
                               id="close"
                               aria-required="true"/>
                    </div>
                </div>

                <label class="form-label" for="price">Preço</label>
                <input class="field field-price field-price__amount price"
                       name="price"
                       type="text"
                       id="price"
                       placeholder="Preço R$ 0,00"/>
            </fieldset>

            <h3 class="form-register__sesssion title">Descrição</h3>
            <fieldset class="fieldset fieldset-description">
                <label class="form-label required" for="short_description">Curta descrição</label>
                <textarea class="field field-description field-description__short short_description required"
                          name="short_description"
                          id="short_description"
                          maxlength="200"
                          placeholder="Descrição curta da atração"
                          aria-required="true">
                </textarea>

                <label class="form-label required" for="description">Descrição completa</label>
                <textarea class="field field-description field-description__full description required"
                          name="description"
                          id="description"
                          maxlength="3000"
                          placeholder="Descrição completa da atração"
                          aria-required="true">
                </textarea>
            </fieldset>

            <h3 class="form-register__sesssion title">Atração ativa?</h3>
            <fieldset class="fieldset fieldset-active">
                <input type="radio"
                       class="field-active field-active__yes yes"
                       name="yesno"
                       id="yes"
                       value=”1”>
                <label class="form-label" for="yes">
                    Sim
                </label>
                <input type="radio"
                       class="field-active field-active__no no"
                       name="yesno"
                       id="no"
                       value=”0”>
                <label class="form-label" for="no">Não</label>
            </fieldset>

            <h3 class="form-register__sesssion title">Avisos</h3>
            <fieldset class="fieldset fieldset-alerts">
                <select class="field field-alerts"
                        name="alert"
                        id="alert"
                        aria-required="true">
                    <option class="field-alerts__option" value="0" disabled selected>
                        Selecione uma opção
                    </option>
                    <option class="field-alerts__option" value="1">
                        Restrições devido COVID-19
                    </option>
                    <option class="field-alerts__option" value="2">
                        Necessário comprovar vacinação contra COVID-19
                    </option>
                    <option class="field-alerts__option" value="3">
                        Necessário visto especial
                    </option>
                </select>
            </fieldset>

            <h3 class="form-register__sesssion title">Imagens</h3>
            <fieldset class="fieldset fieldset-photos">
                <label class="form-label" for="photo">Selecione o arquivo</label>
                <input type="file"
                       id="photo"
                       multiple>
            </fieldset>

            <div class="actions">
                <button class="btn btn-submit" type="submit" role="button">Cadastrar</button>
                <button class="btn btn-cancel" type="reset" role="button">Cancelar</button>
            </div>

        </form>
    </div>
</div>

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