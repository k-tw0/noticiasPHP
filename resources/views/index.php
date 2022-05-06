<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bulma</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css" />
    <style>
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    </style>

    <style>
    /* clases de esconder contenido */
    .inicio-class,
    .deportes-class,
    .negocios-class {
        display: none;
    }

    /* Esto es para el icono del faro  */
    .navbar-item img {
        max-height: none;
    }

    .navbar-brand,
    .navbar-menu {
        background: aliceblue;
    }

    .container-noticia-principal {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        margin: 1em;
    }

    .youtube {
        max-width: 100%;
    }

    .cards-noticias-division {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-column-gap: 1em;
        padding: 1em;
    }

    /* card de comentarios */

    .espaciado-card {
        margin-bottom: 1em;
    }

    .card-footer-noticia {
        border-top: 1px solid #ededed;
        text-align: center;
        max-width: 100%;
        padding: 1em;
    }

    #reloj {
        text-align: center;
    }

    /*Slider*/
    .container-slider {
        margin: auto;
        background-color: white;
        width: 1000px;
        padding: 10px;
        max-width: 100%;
    }

    .slider,
    .slider-id,
    .menu,
    .li {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .slider {
        position: relative;
        width: 100%;
        height: 300px;
    }

    .slider-id {
        position: absolute;
        left: 0px;
        top: 0px;
        opacity: 0;
        width: inherit;
        height: inherit;
        transition: opacity 0.5s;
        background: #fff;
        text-align: center;
    }

    .slider-title {
        position: absolute;
        flex: auto;
        color: rgb(255, 255, 255);
    }

    .img-slider {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }

    .slider-id:first-child {
        opacity: 1;
        /*Mostramos el primer <li>*/
    }

    .slider-id:target {
        opacity: 1;
        /*Mostramos el <li> del enlace que pulsemos*/
    }

    .menu {
        text-align: center;
        margin: 20px;
    }

    .container-number {
        display: inline-block;
        text-align: center;
    }

    .number-slider {
        display: inline-block;
        color: white;
        text-decoration: none;
        background-color: grey;
        padding: 10px;
        width: 20px;
        height: 20px;
        font-size: 20px;
        border-radius: 100%;
        max-width: 100%;
    }

    /*Fin slider- sin bulma*/

    .pagination-list {
        text-align: center;
        align-items: center;
    }

    .pagination-list {
        justify-content: center;
    }

    /*Titulo secciones de links 1, 2 y 3*/
    .hero-body {
        text-align: center;
    }

    /* Secciones */
    .hero-body__nomostrar1,
    .hero-body__nomostrar2,
    .hero-body__nomostrar3,
    .hero-body__deporte1,
    .hero-body__deporte2,
    .hero-body__deporte3 {
        display: none;
    }

    @media (max-width: 1366px) {
        .title-noticia-mediana {
            font-size: 22px;
        }
    }

    @media (max-width: 900px) {
        .container-noticia-principal {
            grid-template-columns: repeat(1, 1fr);
        }

        .cards-noticias-division {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .cards-noticias-division {
            grid-template-columns: repeat(1, 1fr);
        }
    }
    </style>
</head>

<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                <img src="https://cdn.icon-icons.com/icons2/1551/PNG/512/if-traveling-icon-flat-outline14-3405120_107390.png"
                    width="50
            " height="28" />
            </a>
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" id="inicioID"> Inicio </a>

                <a class="navbar-item" id="deportesID"> Deportes </a>

                <a class="navbar-item" id="negociosID"> Negocios </a>

                <div class="navbar-item has-dropdown" id="dropdown">
                    <a class="navbar-link"> Mas </a>

                    <div class="navbar-dropdown">
                        <a href="formulario" target="_blank" class="navbar-item"> Contacto </a>

                        <hr class="navbar-divider" />
                        <a class="navbar-item"> Añadir
                            Contenido </a>
                    </div>
                </div>
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a href="register" target="_blank" class="button is-primary">
                                <strong>Sign up</strong>
                            </a>
                            <a class="button is-light">
                                Log in
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </nav>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <h1 class="title">Contenido del modal</h1>
            <p>Anuncios y mas</p>
            <p>Aviso de contenido</p>
        </div>
    </div>

    <!-- Aquí está el contenido principal de nuestra página -->
    <main>
        <!-- Contiene un artículo -->
        <article>
            <!-- Slider -->
            <div class="subtitle" id="reloj"></div>
            <div class="container-slider">
                <ul class="slider">
                    <li class="slider-id" id="slide1">
                        <h3 class="title slider-title">Noticias destacadas</h3>
                        <img class="img-slider"
                            src="https://www.larazon.es/resizer/qWRV1WNuUqnOBf17oB4M7dBBvGU=/600x400/smart/filters:format(webp):quality(65)/cloudfront-eu-central-1.images.arcpublishing.com/larazon/CGOFA3HG35GYTJPUYLHNEBPXEQ.jpg" />
                    </li>
                    <li class="slider-id" id="slide2">
                        <h3 class="title slider-title">Noticias destacadas</h3>
                        <img class="img-slider"
                            src="https://cdn.bioguia.com/embed/4ec2d55338eda28a6ffcb89aa6c9f9ccf1524416715/Estas_5_senales_de_tus_suenos_te_estan_diciendo_algo-_--Prestales_atencion-?imagick=1&size=1000" />
                    </li>
                    <li class="slider-id" id="slide3">
                        <h3 class="title slider-title">Noticias destacadas</h3>
                        <img class="img-slider"
                            src="https://wl-genial.cf.tsp.li/resize/728x/jpg/bf8/dc8/61c0915ae08ba948c6c820f018.jpg" />
                    </li>
                </ul>

                <ul class="menu">
                    <li class="container-number">
                        <a href="#slide1" class="number-slider">.</a>
                    </li>
                    <li class="container-number">
                        <a href="#slide2" class="number-slider">.</a>
                    </li>
                    <li class="container-number">
                        <a href="#slide3" class="number-slider">.</a>
                    </li>
                </ul>
            </div>
            <section>
                <div class="inicio-class" id="inicioSection">
                    <div class="hero is-small is-success">
                        <div class="hero-body">
                            <p class="title">Inicio</p>
                            <p class="subtitle">Noticias del dia</p>
                        </div>
                    </div>
                    <div class="container-noticia-principal">
                        <div class="card card-grande">
                            <div class="card-image">
                                <iframe class="youtube" width="560" height="315"
                                    src="https://www.youtube.com/embed/ZtPq_U_tM2U" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-left">
                                        <figure class="image is-48x48">
                                            <img src="https://bulma.io/images/placeholders/96x96.png"
                                                alt="Placeholder image" />
                                        </figure>
                                    </div>
                                    <div class="media-content">
                                        <p class="title is-4">John Smith</p>
                                        <p class="subtitle is-6">@johnsmith</p>
                                    </div>
                                </div>

                                <div class="content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                    <a href="#">#css</a> <a href="#">#responsive</a>
                                    <br />
                                    <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                </div>
                            </div>
                        </div>
                        <div class="cards-noticias-division">
                            <div class="espaciado-card">
                                <div class="card card-mediana">
                                    <div class="card-content">
                                        <p class="title title-noticia-mediana">
                                            “There are two hard things in computer science: cache
                                            invalidation, naming things, and off-by-one errors.”
                                        </p>
                                        <p class="subtitle">Jeff Atwood</p>
                                    </div>
                                    <footer class="card-footer-noticia">
                                        <h4>Fourth level</h4>
                                        <p>
                                            Nulla efficitur eleifend nisi, sit amet bibendum sapien
                                            fringilla ac. Mauris euismod metus a tellus laoreet, at
                                            elementum ex efficitur.
                                        </p>
                                        <p>
                                            Nulla efficitur eleifend nisi, sit amet bibendum sapien
                                            fringilla ac. Mauris euismod metus a tellus laoreet, at
                                            elementum ex efficitur.
                                        </p>
                                        <p>
                                            Nulla efficitur eleifend nisi, sit amet bibendum sapien
                                            fringilla ac. Mauris euismod metus a tellus laoreet, at
                                            elementum ex efficitur.
                                        </p>
                                    </footer>
                                </div>
                            </div>
                            <div>
                                <div class="card card-mediana">
                                    <div class="card-content">
                                        <p class="title title-noticia-mediana">
                                            “There are two hard things in computer science: cache
                                            invalidation, naming things, and off-by-one errors.”
                                        </p>
                                        <p class="subtitle">Jeff Atwood</p>
                                    </div>
                                    <footer class="card-footer-noticia">
                                        <h3>Fourth level</h3>
                                        <p>
                                            Nulla efficitur eleifend nisi, sit amet bibendum sapien
                                            fringilla ac. Mauris euismod metus a tellus laoreet, at
                                            elementum ex efficitur.
                                        </p>
                                        <p>
                                            Nulla efficitur eleifend nisi, sit amet bibendum sapien
                                            fringilla ac. Mauris euismod metus a tellus laoreet, at
                                            elementum ex efficitur.
                                        </p>
                                        <p>
                                            Nulla efficitur eleifend nisi, sit amet bibendum sapien
                                            fringilla ac. Mauris euismod metus a tellus laoreet, at
                                            elementum ex efficitur.
                                        </p>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-noticia-principal">
                        <div class="card card-grande">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="https://1.bp.blogspot.com/-ijR-XUKsLkU/WXd1MvQ31VI/AAAAAAAAAAw/ULkAEgaBp2YrIMsahyef96v_PcMuKWpcgCPcBGAYYCw/s1600/SUE%25C3%2591O%2BLUCIDO.jpg"
                                        alt="Placeholder image" />
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-left">
                                        <figure class="image is-48x48">
                                            <img src="https://bulma.io/images/placeholders/96x96.png"
                                                alt="Placeholder image" />
                                        </figure>
                                    </div>
                                    <div class="media-content">
                                        <p class="title is-4">John Smith</p>
                                        <p class="subtitle is-6">@johnsmith</p>
                                    </div>
                                </div>

                                <div class="content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                    <a href="#">#css</a> <a href="#">#responsive</a>
                                    <br />
                                    <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                </div>
                            </div>
                        </div>
                        <div class="cards-noticias-division">
                            <div class="espaciado-card">
                                <div class="card card-mediana">
                                    <div class="card-content">
                                        <p class="title title-noticia-mediana">
                                            “There are two hard things in computer science: cache
                                            invalidation, naming things, and off-by-one errors.”
                                        </p>
                                        <p class="subtitle">Jeff Atwood</p>
                                    </div>
                                    <footer class="card-footer-noticia">
                                        <h4>Fourth level</h4>
                                        <p>
                                            Nulla efficitur eleifend nisi, sit amet bibendum sapien
                                            fringilla ac. Mauris euismod metus a tellus laoreet, at
                                            elementum ex efficitur.
                                        </p>
                                        <p>
                                            Nulla efficitur eleifend nisi, sit amet bibendum sapien
                                            fringilla ac. Mauris euismod metus a tellus laoreet, at
                                            elementum ex efficitur.
                                        </p>
                                        <p>
                                            Nulla efficitur eleifend nisi, sit amet bibendum sapien
                                            fringilla ac. Mauris euismod metus a tellus laoreet, at
                                            elementum ex efficitur.
                                        </p>
                                    </footer>
                                </div>
                            </div>
                            <div>
                                <div class="card card-mediana">
                                    <div class="card-content">
                                        <p class="title title-noticia-mediana">
                                            “There are two hard things in computer science: cache
                                            invalidation, naming things, and off-by-one errors.”
                                        </p>
                                        <p class="subtitle">Jeff Atwood</p>
                                    </div>
                                    <footer class="card-footer-noticia">
                                        <h3>Fourth level</h3>
                                        <p>
                                            Nulla efficitur eleifend nisi, sit amet bibendum sapien
                                            fringilla ac. Mauris euismod metus a tellus laoreet, at
                                            elementum ex efficitur.
                                        </p>
                                        <p>
                                            Nulla efficitur eleifend nisi, sit amet bibendum sapien
                                            fringilla ac. Mauris euismod metus a tellus laoreet, at
                                            elementum ex efficitur.
                                        </p>
                                        <p>
                                            Nulla efficitur eleifend nisi, sit amet bibendum sapien
                                            fringilla ac. Mauris euismod metus a tellus laoreet, at
                                            elementum ex efficitur.
                                        </p>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="deportes-class" id="deporteSection">
                    <nav class="pagination" role="navigation" aria-label="pagination">
                        <ul class="pagination-list">
                            <li>
                                <a id="paginationLinkDeporte1" class="pagination-link is-current" aria-label="Page 1"
                                    aria-current="page">1</a>
                            </li>
                            <li>
                                <a id="paginationLinkDeporte2" class="pagination-link" aria-label="Goto page 2">2</a>
                            </li>
                            <li>
                                <a id="paginationLinkDeporte3" class="pagination-link" aria-label="Goto page 3">3</a>
                            </li>
                        </ul>
                    </nav>
                    <div id="contentDeporteLink1">
                        <div class="hero is-small is-link">
                            <div class="hero-body">
                                <p class="title">Fútbol</p>
                                <p class="subtitle">Champions League</p>
                            </div>
                        </div>
                        <div class="container-noticia-principal">
                            <div class="card card-grande">
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                        <img src="https://as01.epimg.net/futbol/imagenes/2022/04/26/champions/1650948733_580917_1651005910_noticia_normal_recorte1.jpg"
                                            alt="Placeholder image" />
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="image is-48x48">
                                                <img src="https://bulma.io/images/placeholders/96x96.png"
                                                    alt="Placeholder image" />
                                            </figure>
                                        </div>
                                        <div class="media-content">
                                            <p class="title is-4">John Smith</p>
                                            <p class="subtitle is-6">@johnsmith</p>
                                        </div>
                                    </div>

                                    <div class="content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                        <a href="#">#css</a> <a href="#">#responsive</a>
                                        <br />
                                        <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                    </div>
                                </div>
                            </div>
                            <div class="cards-noticias-division">
                                <div class="espaciado-card">
                                    <div class="card card-mediana">
                                        <div class="card-content">
                                            <p class="title title-noticia-mediana">
                                                “There are two hard things in computer science: cache
                                                invalidation, naming things, and off-by-one errors.”
                                            </p>
                                            <p class="subtitle">Jeff Atwood</p>
                                        </div>
                                        <footer class="card-footer-noticia">
                                            <h4>Fourth level</h4>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                        </footer>
                                    </div>
                                </div>
                                <div>
                                    <div class="card card-mediana">
                                        <div class="card-content">
                                            <p class="title title-noticia-mediana">
                                                “There are two hard things in computer science: cache
                                                invalidation, naming things, and off-by-one errors.”
                                            </p>
                                            <p class="subtitle">Jeff Atwood</p>
                                        </div>
                                        <footer class="card-footer-noticia">
                                            <h3>Fourth level</h3>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="contentDeporteLink2" class="hero-body__deporte2">
                        <div class="hero is-small is-link">
                            <div class="hero-body">
                                <p class="title">Basketball</p>
                                <p class="subtitle">Balon mano piso</p>
                            </div>
                        </div>
                        <div class="container-noticia-principal">
                            <div class="card card-grande">
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                        <img src="https://phantom-marca.unidadeditorial.es/bf166352a6c6d1e7b97edfd3fabbd018/resize/660/f/webp/assets/multimedia/imagenes/2022/04/29/16512663304941.jpg"
                                            alt="Placeholder image" />
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="image is-48x48">
                                                <img src="https://bulma.io/images/placeholders/96x96.png"
                                                    alt="Placeholder image" />
                                            </figure>
                                        </div>
                                        <div class="media-content">
                                            <p class="title is-4">John Smith</p>
                                            <p class="subtitle is-6">@johnsmith</p>
                                        </div>
                                    </div>

                                    <div class="content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                        <a href="#">#css</a> <a href="#">#responsive</a>
                                        <br />
                                        <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                    </div>
                                </div>
                            </div>
                            <div class="cards-noticias-division">
                                <div class="espaciado-card">
                                    <div class="card card-mediana">
                                        <div class="card-content">
                                            <p class="title title-noticia-mediana">
                                                “There are two hard things in computer science: cache
                                                invalidation, naming things, and off-by-one errors.”
                                            </p>
                                            <p class="subtitle">Jeff Atwood</p>
                                        </div>
                                        <footer class="card-footer-noticia">
                                            <h4>Fourth level</h4>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                        </footer>
                                    </div>
                                </div>
                                <div>
                                    <div class="card card-mediana">
                                        <div class="card-content">
                                            <p class="title title-noticia-mediana">
                                                “There are two hard things in computer science: cache
                                                invalidation, naming things, and off-by-one errors.”
                                            </p>
                                            <p class="subtitle">Jeff Atwood</p>
                                        </div>
                                        <footer class="card-footer-noticia">
                                            <h3>Fourth level</h3>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="contentDeporteLink3" class="hero-body__deporte3">
                        <div class="hero is-small is-link">
                            <div class="hero-body">
                                <p class="title">UFC</p>
                                <p class="subtitle">(Peleas)</p>
                            </div>
                        </div>
                        <div class="container-noticia-principal">
                            <div class="card card-grande">
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                        <img src="https://mma.uno/wp-content/uploads/2022/04/Font-vs-Vera-UFC-Vegas-53.jpeg?ezimgfmt=ng%3Awebp%2Fngcb2%2Frs%3Adevice%2Frscb2-1"
                                            alt="Placeholder image" />
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="image is-48x48">
                                                <img src="https://bulma.io/images/placeholders/96x96.png"
                                                    alt="Placeholder image" />
                                            </figure>
                                        </div>
                                        <div class="media-content">
                                            <p class="title is-4">John Smith</p>
                                            <p class="subtitle is-6">@johnsmith</p>
                                        </div>
                                    </div>

                                    <div class="content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                        <a href="#">#css</a> <a href="#">#responsive</a>
                                        <br />
                                        <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                    </div>
                                </div>
                            </div>
                            <div class="cards-noticias-division">
                                <div class="espaciado-card">
                                    <div class="card card-mediana">
                                        <div class="card-content">
                                            <p class="title title-noticia-mediana">
                                                “There are two hard things in computer science: cache
                                                invalidation, naming things, and off-by-one errors.”
                                            </p>
                                            <p class="subtitle">Jeff Atwood</p>
                                        </div>
                                        <footer class="card-footer-noticia">
                                            <h4>Fourth level</h4>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                        </footer>
                                    </div>
                                </div>
                                <div>
                                    <div class="card card-mediana">
                                        <div class="card-content">
                                            <p class="title title-noticia-mediana">
                                                “There are two hard things in computer science: cache
                                                invalidation, naming things, and off-by-one errors.”
                                            </p>
                                            <p class="subtitle">Jeff Atwood</p>
                                        </div>
                                        <footer class="card-footer-noticia">
                                            <h3>Fourth level</h3>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="negocios-class" id="negocioSection">
                    <nav class="pagination" role="navigation" aria-label="pagination">
                        <ul class="pagination-list">
                            <li>
                                <a id="pagintationLink1" class="pagination-link is-current" aria-label="Page 1"
                                    aria-current="page">1</a>
                            </li>
                            <li>
                                <a id="pagintationLink2" class="pagination-link" aria-label="Goto page 2">2</a>
                            </li>
                            <li>
                                <a id="pagintationLink3" class="pagination-link" aria-label="Goto page 3">3</a>
                            </li>
                        </ul>
                    </nav>
                    <div id="contentLink1">
                        <div class="hero is-small is-info">
                            <div class="hero-body">
                                <p class="title">Ologramas 3D</p>
                            </div>
                        </div>
                        <div class="container-noticia-principal">
                            <div class="card card-grande">
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                        <img src="https://hypervsn.com/media/video/poster/Block_Desktop1.png"
                                            alt="Placeholder image" />
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="image is-48x48">
                                                <img src="https://bulma.io/images/placeholders/96x96.png"
                                                    alt="Placeholder image" />
                                            </figure>
                                        </div>
                                        <div class="media-content">
                                            <p class="title is-4">John Smith</p>
                                            <p class="subtitle is-6">@johnsmith</p>
                                        </div>
                                    </div>

                                    <div class="content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                        <a href="#">#css</a> <a href="#">#responsive</a>
                                        <br />
                                        <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                    </div>
                                </div>
                            </div>
                            <div class="cards-noticias-division">
                                <div class="espaciado-card">
                                    <div class="card card-mediana">
                                        <div class="card-content">
                                            <p class="title title-noticia-mediana">
                                                “There are two hard things in computer science: cache
                                                invalidation, naming things, and off-by-one errors.”
                                            </p>
                                            <p class="subtitle">Jeff Atwood</p>
                                        </div>
                                        <footer class="card-footer-noticia">
                                            <h4>Fourth level</h4>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                        </footer>
                                    </div>
                                </div>
                                <div>
                                    <div class="card card-mediana">
                                        <div class="card-content">
                                            <p class="title title-noticia-mediana">
                                                “There are two hard things in computer science: cache
                                                invalidation, naming things, and off-by-one errors.”
                                            </p>
                                            <p class="subtitle">Jeff Atwood</p>
                                        </div>
                                        <footer class="card-footer-noticia">
                                            <h3>Fourth level</h3>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="contentLink2" class="hero-body__nomostrar2">
                        <div class="hero is-small is-info">
                            <div class="hero-body">
                                <p class="title">Cryptos</p>
                            </div>
                        </div>
                        <div class="container-noticia-principal">
                            <div class="card card-grande">
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                        <img src="https://www.infobae.com/new-resizer/VXHdJ3gd8sX2rv4dhPbqA2IiJTs=/768x432/filters:format(webp):quality(85)/cloudfront-us-east-1.images.arcpublishing.com/infobae/GOOU4DOVSBC63IOEVVQ7KI3W3I.jpg"
                                            alt="Placeholder image" />
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="image is-48x48">
                                                <img src="https://bulma.io/images/placeholders/96x96.png"
                                                    alt="Placeholder image" />
                                            </figure>
                                        </div>
                                        <div class="media-content">
                                            <p class="title is-4">John Smith</p>
                                            <p class="subtitle is-6">@johnsmith</p>
                                        </div>
                                    </div>

                                    <div class="content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                        <a href="#">#css</a> <a href="#">#responsive</a>
                                        <br />
                                        <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                    </div>
                                </div>
                            </div>
                            <div class="cards-noticias-division">
                                <div class="espaciado-card">
                                    <div class="card card-mediana">
                                        <div class="card-content">
                                            <p class="title title-noticia-mediana">
                                                “There are two hard things in computer science: cache
                                                invalidation, naming things, and off-by-one errors.”
                                            </p>
                                            <p class="subtitle">Jeff Atwood</p>
                                        </div>
                                        <footer class="card-footer-noticia">
                                            <h4>Fourth level</h4>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                        </footer>
                                    </div>
                                </div>
                                <div>
                                    <div class="card card-mediana">
                                        <div class="card-content">
                                            <p class="title title-noticia-mediana">
                                                “There are two hard things in computer science: cache
                                                invalidation, naming things, and off-by-one errors.”
                                            </p>
                                            <p class="subtitle">Jeff Atwood</p>
                                        </div>
                                        <footer class="card-footer-noticia">
                                            <h3>Fourth level</h3>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="contentLink3" class="hero-body__nomostrar3">
                        <div class="hero is-small is-info">
                            <div class="hero-body">
                                <p class="title">Microsoft</p>
                            </div>
                        </div>
                        <div class="container-noticia-principal">
                            <div class="card card-grande">
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                        <img src="https://www.latercera.com/resizer/TIGubECAz5MrB0FJdJFzkRMurqQ=/900x600/smart/cloudfront-us-east-1.images.arcpublishing.com/copesa/KDGBNJ753NBIHM6LSRJDXCSJA4.jpg"
                                            alt="Placeholder image" />
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="image is-48x48">
                                                <img src="https://bulma.io/images/placeholders/96x96.png"
                                                    alt="Placeholder image" />
                                            </figure>
                                        </div>
                                        <div class="media-content">
                                            <p class="title is-4">John Smith</p>
                                            <p class="subtitle is-6">@johnsmith</p>
                                        </div>
                                    </div>

                                    <div class="content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                        <a href="#">#css</a> <a href="#">#responsive</a>
                                        <br />
                                        <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                    </div>
                                </div>
                            </div>
                            <div class="cards-noticias-division">
                                <div class="espaciado-card">
                                    <div class="card card-mediana">
                                        <div class="card-content">
                                            <p class="title title-noticia-mediana">
                                                “There are two hard things in computer science: cache
                                                invalidation, naming things, and off-by-one errors.”
                                            </p>
                                            <p class="subtitle">Jeff Atwood</p>
                                        </div>
                                        <footer class="card-footer-noticia">
                                            <h4>Fourth level</h4>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                        </footer>
                                    </div>
                                </div>
                                <div>
                                    <div class="card card-mediana">
                                        <div class="card-content">
                                            <p class="title title-noticia-mediana">
                                                “There are two hard things in computer science: cache
                                                invalidation, naming things, and off-by-one errors.”
                                            </p>
                                            <p class="subtitle">Jeff Atwood</p>
                                        </div>
                                        <footer class="card-footer-noticia">
                                            <h3>Fourth level</h3>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                            <p>
                                                Nulla efficitur eleifend nisi, sit amet bibendum
                                                sapien fringilla ac. Mauris euismod metus a tellus
                                                laoreet, at elementum ex efficitur.
                                            </p>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>

        <!-- el contenido aparte también se puede anidar dentro del contenido principal -->
    </main>

    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                <strong>Paginacion</strong> por
                <a href="https://jgthms.com">Franco Leany Ramirez Leiva</a>. The
                source code is licensed
                <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The
                website content is licensed
                <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
            </p>
        </div>
    </footer>

    <script>
    //DOMContentLoeaded es un evento que solamente se llama cuando cargue toda la pagina inicia
    document.addEventListener("DOMContentLoaded", () => {
        function muestraReloj() {
            var d = new Date(); // aqui se llama al constructor de la fecha
            var horas = d.getHours(); // aqui se llama al constructor de la hora
            var minutos = d.getMinutes(); // aqui se llama al constructor de los minutos
            var segundos = d.getSeconds(); // aqui se llama al constructor de los segundos

            // SI, el numero que tienen estas variables es menor a 10 entonces se les añadira un 0
            if (horas < 10) {
                horas = "0" + horas;
            }
            if (minutos < 10) {
                minutos = "0" + minutos;
            }
            if (segundos < 10) {
                segundos = "0" + segundos;
            }
            // Recorrido de los dias en total son 7 contando el 0
            var dia = new Array(7);
            dia[0] = "Domingo";
            dia[1] = "Lunes";
            dia[2] = "Martes";
            dia[3] = "Miercoles";
            dia[4] = "Jueves";
            dia[5] = "Viernes";
            dia[6] = "Sabado";

            var coco = document.getElementById("reloj"); // Llamamos a la id del div la caja
            // INTENTE LLAMARLO POR CLASES PERO NO PUDE, ASI QUE LO REALICE CON ID
            // var coco = document.getElementsByClassName("reloj");

            var hora = horas + ":" + minutos + ":" +
                segundos; // AQUI SE CONCATENA SOLAMENTE Y SE ALMACENA EN LA VARIABLE HORA

            //AQUI SE PINTAN LOS DATOS EN LA VARIBALE COCO QUE ES LA ID DE LA CAJA(DIV)
            coco.innerHTML =
                "<b>" +
                dia[d.getDay()] +
                " / " +
                d.toISOString().split("T")[0] +
                " / " +
                hora +
                "</b>";
        }

        //setTimeout(function () {}, 2000);

        setInterval(muestraReloj, 1000);

        //Modal
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        setTimeout(function() {
            modal.style.display = "block";
        }, 2000);

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        };

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };

        //controlador para mostrar contenido dinamico

        const inicioSection = document.getElementById("inicioSection");
        const deporteSection = document.getElementById("deporteSection");
        const negocioSection = document.getElementById("negocioSection");
        document.getElementById("inicioID").addEventListener(
            "click",
            function(event) {
                let hola = 0;
                if (hola == 0) {
                    inicioSection.classList.remove("inicio-class");

                    deporteSection.classList.add("deportes-class");
                    negocioSection.classList.add("negocios-class");
                    hola += 1;
                    console.log(hola);
                } else if (hola == 1) {
                    inicioSection.classList.add("inicio-class");
                    hola -= 1;
                    console.log(hola);
                }
            },
            false
        );
        document.getElementById("deportesID").addEventListener(
            "click",
            function(event) {
                let hola = 0;
                if (hola == 0) {
                    deporteSection.classList.remove("deportes-class");

                    inicioSection.classList.add("inicio-class");
                    negocioSection.classList.add("negocios-class");
                    hola += 1;
                    console.log(hola);
                } else if (hola == 1) {
                    deporteSection.classList.add("deportes-class");
                    hola -= 1;
                    console.log(hola);
                }
            },
            false
        );
        document.getElementById("negociosID").addEventListener(
            "click",
            function(event) {
                let hola = 0;
                if (hola == 0) {
                    negocioSection.classList.remove("negocios-class");

                    deporteSection.classList.add("deportes-class");
                    inicioSection.classList.add("inicio-class");
                    hola += 1;
                    console.log(hola);
                } else if (hola == 1) {
                    negocioSection.classList.add("negocios-class");
                    hola -= 1;
                    console.log(hola);
                }
            },
            false
        );

        // Obtener todos los elementos "navbar-burger"
        const $navbarBurgers = Array.prototype.slice.call(
            document.querySelectorAll(".navbar-burger"),
            0
        );
        //Controlador para el menu desplegable "mas"
        const dropdown = document.getElementById("dropdown");
        dropdown.addEventListener("click", (e) => {
            e.stopPropagation();
            dropdown.classList.toggle("is-active");
        });
        document.addEventListener("click", () => {
            dropdown.classList.remove("is-active");
        });

        // Comprueba si hay hamburguesas en la barra de navegación
        if ($navbarBurgers.length > 0) {
            // Agrega un evento de clic en cada uno de ellos
            $navbarBurgers.forEach((el) => {
                el.addEventListener("click", () => {
                    // Obtener el objetivo del atributo "objetivo de datos"
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    // Cambia la clase "is-active" tanto en "navbar-burger" como en "navbar-menu"
                    el.classList.toggle("is-active");
                    $target.classList.toggle("is-active");
                });
            });
        }

        // establecemos las constantes
        // IDs de paginaciones por numeros deporte
        const paginationLinkDeporte1 = document.getElementById(
            "paginationLinkDeporte1"
        );
        const paginationLinkDeporte2 = document.getElementById(
            "paginationLinkDeporte2"
        );
        const paginationLinkDeporte3 = document.getElementById(
            "paginationLinkDeporte3"
        );

        // establecemos las constantes
        // IDs de contenidos de paginaciones por numeros
        const contentDeporteLink1 = document.getElementById("contentDeporteLink1");
        const contentDeporteLink2 = document.getElementById("contentDeporteLink2");
        const contentDeporteLink3 = document.getElementById("contentDeporteLink3");

        paginationLinkDeporte1.addEventListener("click", (e) => {
            e.stopPropagation(); // esto es para evitar bugs de progragacion de clicks

            // ORDEN DE PAGINACION CON EL CLICK RESPECTIVO, ESTE ES EL CLICK 1
            paginationLinkDeporte1.classList.add(
                "is-current"); // añadimos la clase paginacion principal 1

            paginationLinkDeporte2.classList.remove("is-current"); // remueve la clase para la pagina 1
            paginationLinkDeporte3.classList.remove("is-current"); // remueve la clase para la pagina 3

            // CONTENIDO DEL HERO CON LA ESTRUCTURA DE LA PAGINACION
            contentDeporteLink1.classList.remove(
                "hero-body__deporte1"); // añadimos la clase paginacion principal 1 DEPORTE

            contentDeporteLink2.classList.add(
                "hero-body__deporte2"); // remueve la clase para mostrar el contenido del hero 2 DEPORTE
            contentDeporteLink3.classList.add(
                "hero-body__deporte3"); // remueve la clase para mostrar el contenido del hero 3 DEPORTE
        });
        paginationLinkDeporte2.addEventListener("click", (e) => {
            e.stopPropagation();
            // ORDEN DE PAGINACION CON EL CLICK RESPECTIVO, ESTE ES EL CLICK 2
            paginationLinkDeporte2.classList.add(
                "is-current"); // añadimos la clase paginacion principal 2

            paginationLinkDeporte1.classList.remove("is-current"); // remueve la clase para la pagina 1
            paginationLinkDeporte3.classList.remove("is-current"); // remueve la clase para la pagina 3

            // CONTENIDO DEL HERO CON LA ESTRUCTURA DE LA PAGINACION
            contentDeporteLink2.classList.remove(
                "hero-body__deporte2"); // añadimos la clase paginacion principal 1

            contentDeporteLink1.classList.add(
                "hero-body__deporte1"); // remueve la clase para mostrar el contenido del hero 1
            contentDeporteLink3.classList.add(
                "hero-body__deporte3"); // remueve la clase para mostrar el contenido del hero 3
        });
        paginationLinkDeporte3.addEventListener("click", (e) => {
            e.stopPropagation();
            // ORDEN DE PAGINACION CON EL CLICK RESPECTIVO, ESTE ES EL CLICK 2
            paginationLinkDeporte3.classList.add(
                "is-current"); // añadimos la clase paginacion principal 2

            paginationLinkDeporte1.classList.remove("is-current"); // remueve la clase para la pagina 1
            paginationLinkDeporte2.classList.remove("is-current"); // remueve la clase para la pagina 3

            // CONTENIDO DEL HERO CON LA ESTRUCTURA DE LA PAGINACION
            contentDeporteLink3.classList.remove(
                "hero-body__deporte3"); // añadimos la clase paginacion principal 1

            contentDeporteLink1.classList.add(
                "hero-body__deporte1"); // remueve la clase para mostrar el contenido del hero 1
            contentDeporteLink2.classList.add(
                "hero-body__deporte2"); // remueve la clase para mostrar el contenido del hero 3
        });
        // FIN

        // establecemos las constantes
        // IDs de paginaciones por numeros negocios
        const paginationLink1 = document.getElementById("pagintationLink1");
        const paginationLink2 = document.getElementById("pagintationLink2");
        const paginationLink3 = document.getElementById("pagintationLink3");

        // establecemos las constantes
        // IDs de contenidos de paginaciones por numeros
        const contentLink1 = document.getElementById("contentLink1");
        const contentLink2 = document.getElementById("contentLink2");
        const contentLink3 = document.getElementById("contentLink3");
        paginationLink1.addEventListener("click", (e) => {
            e.stopPropagation(); // esto es para evitar bugs de progragacion de clicks

            // ORDEN DE PAGINACION CON EL CLICK RESPECTIVO, ESTE ES EL CLICK 1
            paginationLink1.classList.add("is-current"); // añadimos la clase paginacion principal 1

            paginationLink2.classList.remove("is-current"); // remueve la clase para la pagina 1
            paginationLink3.classList.remove("is-current"); // remueve la clase para la pagina 3

            // CONTENIDO DEL HERO CON LA ESTRUCTURA DE LA PAGINACION
            contentLink1.classList.remove(
                "hero-body__nomostrar1"); // añadimos la clase paginacion principal 1

            contentLink2.classList.add(
                "hero-body__nomostrar2"); // remueve la clase para mostrar el contenido del hero 2
            contentLink3.classList.add(
                "hero-body__nomostrar3"); // remueve la clase para mostrar el contenido del hero 3
        });
        paginationLink2.addEventListener("click", (e) => {
            e.stopPropagation();
            // ORDEN DE PAGINACION CON EL CLICK RESPECTIVO, ESTE ES EL CLICK 2
            paginationLink2.classList.add("is-current"); // añadimos la clase paginacion principal 2

            paginationLink1.classList.remove("is-current"); // remueve la clase para la pagina 1
            paginationLink3.classList.remove("is-current"); // remueve la clase para la pagina 3

            // CONTENIDO DEL HERO CON LA ESTRUCTURA DE LA PAGINACION
            contentLink2.classList.remove(
                "hero-body__nomostrar2"); // añadimos la clase paginacion principal 1

            contentLink1.classList.add(
                "hero-body__nomostrar1"); // remueve la clase para mostrar el contenido del hero 1
            contentLink3.classList.add(
                "hero-body__nomostrar3"); // remueve la clase para mostrar el contenido del hero 3
        });
        paginationLink3.addEventListener("click", (e) => {
            e.stopPropagation();

            // ORDEN DE PAGINACION CON EL CLICK RESPECTIVO, ESTE ES EL CLICK 3
            paginationLink3.classList.add("is-current"); // añadimos la clase paginacion principal 3

            paginationLink1.classList.remove("is-current"); // remueve la clase para la pagina 1
            paginationLink2.classList.remove("is-current"); // remueve la clase para la pagina 3

            // CONTENIDO DEL HERO CON LA ESTRUCTURA DE LA PAGINACION
            contentLink3.classList.remove(
                "hero-body__nomostrar3"); // añadimos la clase paginacion principal 3

            contentLink2.classList.add(
                "hero-body__nomostrar2"); // remueve la clase para mostrar el contenido del hero 2
            contentLink1.classList.add(
                "hero-body__nomostrar1"); // remueve la clase para mostrar el contenido del hero 1
        });
    });
    </script>
</body>

</html>