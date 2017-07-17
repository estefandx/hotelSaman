<!DOCTYPE html>
<html dir="ltr" lang="es">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Theme-Paradise" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/font-awesome.min.css')}}">
    <link  type='text/css'  rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <link  type='text/css'  rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
    <link  type='text/css'  rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link  type='text/css'  rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link  type='text/css'  rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
    <link  type='text/css'  rel="stylesheet" href="{{asset('css/stylerestaurante.css')}}">

    <title> @yield('titulo')</title>
</head>

<body class="loading">
<h1 class="hidden">Homepage 1</h1>
<div id="preloader-wrapper">
    <div id="preloader"></div>
</div>

<!--encabezado-->
<header >
    <div class="container">
        <a href="#" class="logo-link"><img class="logo" src="images/logos/restaurante-logo.png" alt="Logo"></a>
        <nav class="main-menu clearfix">
            <h2 class="hidden">Main Menu</h2>
            <ul>
                <li class="menu-item">
                    <a href="{{url('/')}}">Regresar a la Pagina Principal</a>
                </li>
            </ul>
        </nav>
        <div id="menu-toggle">
            <div class="bar first"></div>
            <div class="bar second"></div>
            <div class="bar third"></div>
        </div>
    </div>

    <nav id="mobile-menu">
        <h2 class="hidden">Mobile Navigation Menu</h2>
        <ul>
            <li class="mobile-menu-item">
                <a href="{{url('/')}}">Regresar a la Pagina Principal</a>
            </li>
        </ul>
    </nav>
</header>

<!--Slide-->

<div id="main-slider" class="slider">
        <div class="swiper-container">
            <h2 class="hidden">Main Slider</h2>
            <div class="swiper-wrapper">
                @foreach( $photoRestaurante as $photo)
                    <div class="swiper-slide" style="background: url('fotos/{{$photo->nombre}}') center top/cover no-repeat">
                        <div class="container">
                            <div class="slide-content">



                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="main-slider-control prev"><i class="icon-prev"></i></div>
        <div class="main-slider-control next"><i class="icon-next"></i></div>
        <div class="container">
            <div class="page-controls centered clearfix">
            </div>
        </div>
    </div>

<!--servicios-->
<section class="section-breadcrumb">
        <h2 class="title" >Servicios</h2>
    </section>

<section class="section-style-2">
        <div class="container">
            <p class="content">
				Campo para texto
            </p>
        </div>
    </section>

<!--Mision y vision-->
<section class="section-breadcrumb">
        <h2 class="title" >Acerca de Nosotros</h2>
    </section>

    <section class="section-style-2 section-why-us section-bg-white">
        <div class="container">
            <div class="row" align="center">
                <div class="col-sm-4">
                    <div class="content-box ">
                        <h3 class="title">Misión</h3>
                        <p class="content">Campo para texto</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="content-box">
                        <h3 class="title">Visión</h3>
                        <p class="content">Campo para texto</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="content-box">
                        <h3 class="title">Nuestros Valores</h3>
                        <p class="content">Campo para texto</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--Footer y contacto--> 

 <section class="section-style-2 section-contact-us">
        <h2 class="hidden">Contact us</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="map-wrapper">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3341.9420340929587!2d-75.87373969697343!3d5.061348794080337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e47853723ddca91%3A0x4353051771308e8!2sCra.+9+%238-51%2C+Viterbo%2C+Caldas%2C+Colombia!5e0!3m2!1ses!2ses!4v1499063629639" style="border:0;height: 100%;"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="title" >Restaurante las Tapas</h2>
                    <h3 class="title" >Parrila y Bar</h3>
                    <div class="section-starter"></div>
                    <div class="row">
                        <div class="col-sm-6 office-box" >
                            <h4 class="subtitle">Viterbo - Caldas</h4>
                            <div class="address-line"><i class="fa fa-map-marker"></i>Carrera 9 # 8 -69 Esquina, Viterbo</div>
                            <div class="address-line"><i class="fa fa-phone"></i>869 1656</div>
                            <div class="address-line"><i class="fa fa-phone"></i>(+57)3116171030 – (+57)3216455518</div>
                            <div class="address-line"><i class="fa fa-envelope"></i>samaneventos@hotmail.com</div>
                            <div class="address-line"><i class="fa fa-globe"></i>definir</div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

@yield('contenido')
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4 text-center">
                <h2 class="subtitle wide"><strong>Restaurante Las Tapas</strong></h2>
                <h3 class="subtitle wide" >Parrila y Bar</h3>
                <p>Carrera 9 # 8 -69 Esquina, Viterbo</p>
                <p> <strong>Teléfono: </strong> 869 1656 <strong></p>
                <p> <strong>Celular: </strong>(+57)311 617 1030 – (+57)321 645 5518</p>
                <p><a href="#">samaneventos@hotmail.com</a></p>
            </div>
                <div class="social-links text-right">
                </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="{{ URL::asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/plugins.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/functions.js')}}"></script>
</body>
</html>