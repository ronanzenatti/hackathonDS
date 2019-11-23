<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Hackathon DS 2019</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="bg-top navbar-light">
    <div class="container">
        <div class="row no-gutters d-flex align-items-center align-items-stretch">
            <div class="col-md-4 d-flex align-items-center py-4">
                <a class="navbar-brand" href="{{ url('/') }}">Hackathon <span>Desenvolvimento de Sistemas</span></a>
            </div>
            <div class="col-lg-8 d-block">
                <div class="row d-flex">
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                class="icon-paper-plane"></span></div>
                        <div class="text">
                            <span>E-mail</span>
                            <span>hackathon.ds@etecibitinga.com.br</span>
                        </div>
                    </div>
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                class="icon-phone2"></span></div>
                        <div class="text">
                            <span>Telefones</span>
                            <span>(16) 3341-7046 <br/>(16) 3342-6039</span>
                        </div>
                    </div>
                    <div class="col-md topper d-flex align-items-center justify-content-end">
                        <p class="mb-0">
                            <a href="admin/login.html"
                               class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
                                <span>ENTRAR</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center px-4">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <form action="#" class="searchform order-lg-last">
            <div class="form-group d-flex">
                <input type="text" class="form-control pl-3" placeholder="Procurar">
                <button type="submit" placeholder="" class="form-control search"><span
                        class="ion-ios-search"></span></button>
            </div>
        </form>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link pl-0">Home</a></li>
                <li class="nav-item"><a href="{{ url('/sobre') }}" class="nav-link">Sobre</a></li>
                <li class="nav-item"><a href="{{ url('/cronograma') }}" class="nav-link">Programação</a></li>
                <!-- <li class="nav-item"><a href="teacher.html" class="nav-link">Organização</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Contato</a></li> -->
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-start"
                 data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate">
                    <h1 class="mb-4">CADASTRE-SE</h1>
                    <p>O primeiro Hackathon Desenvolvimento de Sistemas está para começar, não perca tempo e se cadastre
                        para participar </p>
                    <p><a href="admin/register.html" class="btn btn-primary px-4 py-3 mt-3">CADASTRO</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-start"
                 data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate">
                    <h1 class="mb-4">Quer ajudar a construir o futuro?</h1>
                    <p>07/08 à 09/08/2019 - na Etec de Ibitinga-SP.</p>
                    <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">CADASTRE-SE</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-services ftco-no-pb">
    <div class="container-wrap">
        <div class="row no-gutters">
            <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-teacher"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Mentores</h3>
                        <p>O evento contará com mentores, profissionais e empresários que irão auxiliar os
                            participantes.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-education"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Descubra parceiros</h3>
                        <p>Através do sorteio, você poderá criar novas amizades e descobrir novos parceiros para sua
                            jornada.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-jigsaw"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Desenvolva suas idéias</h3>
                        <p>Faça algo absolutamente incrível.Você terá exatas 09h para criar e prototipar o projeto!.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-diploma"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Certificado</h3>
                        <p>Todos os participantes receberão um certificado de participação no evento.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
                <div class="img" style="background-image: url(images/about.jpg);"></div>
            </div>
            <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
                <h2 class="mb-4">Estamos em movimento e a tecnologia também nos movimenta.</h2>
                <p>Como podemos utilizar a tecnologia, metodologias e dados para pensar no nosso futuro?
                    A cultura de inovação é um dos principais pilares da <b>Etec de Ibitinga</b> e abrir espaço para
                    experimentações é essencial.</p>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                                    class="flaticon-security"></span></div>
                            <div class="text pl-3">
                                <h3>Objetivo</h3>
                                <p>O objetivo do Hackathon é promover o desenvolvimento científico e tecnológico por
                                    meio de soluções inovadoras, protótipos de softwares, hardwares e aplicações
                                    tecnológicas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                                    class="flaticon-reading"></span></div>
                            <div class="text pl-3">
                                <h3>Ajude e aprenda</h3>
                                <p>Através do ambiente multidisciplinar, você poderá aprender e ajudar muitas
                                    pessoas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                                    class="flaticon-kids"></span></div>
                            <div class="text pl-3">
                                <h3>Desafio e diversão</h3>
                                <p>Transforme desafios e pressão em diversão.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);"
         data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2 d-flex">
            <div class="col-md-6 align-items-stretch d-flex">
                <div class="img img-video d-flex align-items-center"
                     style="background-image: url(images/about-2.jpg); height: 250px">
                    <!--                    <div class="video justify-content-center">-->
                    <!--                        <a href="https://vimeo.com/45830194"-->
                    <!--                           class="icon-video popup-vimeo d-flex justify-content-center align-items-center">-->
                    <!--                            <span class="ion-ios-play"></span>-->
                    <!--                        </a>-->
                    <!--                    </div>-->
                </div>
            </div>
            <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
                <h2 class="mb-4">ETEC de Ibitinga</h2>
                <p></p>
                <p></p>
            </div>
        </div>
    </div>
</section>


<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 col-lg-12">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Alguma dúvida?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">Rua Rosalbino Tucci, nº 431 - Centro - Ibitinga/SP - CEP: 14.940-088</span>
                            </li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">(16) 3341-7046 / 3342-6039</span></a>
                            </li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span
                                    class="text">hackathon.ds@etecibitinga.com.br</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script>
                    All rights reserved | This template is made with <i class="icon-heart"
                                                                        aria-hidden="true"></i> by <a
                        href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
</script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>

</html>