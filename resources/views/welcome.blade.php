<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/bulma/bulma.min.css') }}"> <!-- Bulma-->
    <link rel="stylesheet" href="{{ asset('css/home/modal.css') }}"> <!-- Modal-->
    <link rel="stylesheet" href="{{ asset('css/home/welcome.css') }}"> <!-- css pagina principal-->
    <!-- Styles -->

</head>

<body class="antialiased">
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img src="img/faro.png" width="50" height="28">
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
                <a class="navbar-item" id="inicioID">
                    Inicio
                </a>

                <a class="navbar-item" id="deportesID">
                    Deportes
                </a>
                <a class="navbar-item" id="negociosID">
                    Negocios
                </a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" id="dropdown">
                        Mas
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item">
                            Contactar
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item">
                            Reportar
                        </a>
                    </div>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="{{ route('register') }}" class="button is-primary">
                            <strong>Registrarse</strong>
                        </a>
                        <a href="{{ url('/home') }}" class="button is-light">
                            Iniciar sesion
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Styles

    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
        @endauth
    </div>
    @endif -->
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
                            <div class="card-image">ahsjd
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



    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </div>
    <div id="componente"></div>

    <script src="{{ asset('js/welcome.js') }}" defer></script>
</body>

</html>