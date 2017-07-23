<!DOCTYPE html>
<html dir="ltr" lang="es">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Theme-Paradise" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="icon" type="image/png" href="/images/logos/favicon.png"  />
    <!-- Google Fonts -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
    <!-- <link href='fonts/fontawesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>-->
    <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/font-awesome.min.css')}}">
    <!-- <link href='fonts/icomoon/style.css' rel='stylesheet' type='text/css'>-->
    <link  type='text/css'  rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <!--<link href='css/jquery-ui.min.css' rel='stylesheet' type='text/css'>-->
    <link  type='text/css'  rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
    <!--<link href='bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css'>-->
    <link  type='text/css'  rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <!--<link href='css/animate.css' rel='stylesheet' type='text/css'>-->
    <link  type='text/css'  rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!--<link href='css/swiper.min.css' rel='stylesheet' type='text/css'>-->
    <link  type='text/css'  rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
    <!-- <link href='css/style.css' rel='stylesheet' type='text/css'>-->
    <link  type='text/css'  rel="stylesheet" href="{{asset('css/style.css')}}">

    <title> @yield('titulo')</title>

</head>
<body class="loading">
<h1 class="hidden">Homepage 1</h1>
<div id="preloader-wrapper">
    <div id="preloader"></div>
</div>

<header >

<div >
    <div class="container">
        <a href="{{url('/')}}"><img class="logo" src="images/logos/logo.png" alt="Logo"></a>

        <a href="{{url('/')}}"><img style="float:right; padding-top: 15px;" src="images/home/face.png" alt="facebook-saman"></a>
        <a href="{{url('/')}}"><img   style="float:right; padding-top: 15px; " src="images/home/insta.png" alt="instagram-saman"></a>


        <nav class="main-menu clearfix">

            <h2 class="hidden">Main Menu</h2>
            <ul>
                <li class="menu-item">
                    <a href="{{url('/')}}">Inicio</a>
                </li>
                <li class="menu-item">
                    <a href="{{url('/about')}}">Quienes Somos</a>
                </li>
                <li class="menu-item">
                    <a href="{{url('/services')}}">Servicios</a>
                </li>
                <li class="menu-item">
                    <a href="{{url('/contact')}}">Contacto</a>
                </li>
                <li class="menu-item">
                    <a href="{{url('/logeo')}}">Ingresar</a>
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
                <a class="menu-item" href="{{url('/')}}">Inicio</a>
            </li>

            <li class="mobile-menu-item">
                <a class="menu-item" href="{{url('/about')}}">Quienes Somos</a>
            </li>

            <li class="mobile-menu-item">
                <a class="menu-item" href="{{url('/services')}}">Servicios</a>
            </li>
            <li class="mobile-menu-item">
                <a class="menu-item" href="{{url('/contact')}}">Contacto</a>
            </li>
            <li class="mobile-menu-item">
                <a class="menu-item" href="{{url('/logeo')}}">Ingresar</a>
            </li>
        </ul>
    </nav>
</header>




@yield('contenido')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3 class="subtitle"><strong>Links</strong></h3>
                <ul class="site-links">
                    <li><a href="{{url('/services')}}">Servicios</a></li>
                    <li><a href="{{url('/about')}}">Quienes Somos</a></li>
                    <li><a href="{{url('/reglamento')}}">Reglamento del Hotel</a></li>
                    <li><a href="{{url('/contact')}}">Contacto</a></li>
                </ul>
            </div>
            <div class="col-sm-4 text-center">
                <h3 class="subtitle wide"><strong>El Samán Viterbo</strong> Hotel</h3>
                <div class="moon-divider small"></div>
                <p>Carrera 9 #8 - 51 - Viterbo</p>
                <p> <strong>Teléfono: </strong> 869 1136 - <strong>Celular: </strong>(+57) - 313 711 9851</p>
                <p><a href="#">hotelelsamanviterbo@hotmail.com</a></p>
                <div class="moon-divider small"></div>
            </div>
                <div class="social-links text-right">
                    <a class="social-link" href="#"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a>
                    <a class="social-link" href="#"><i class="fa fa-instagram"></i><i class="fa fa-instagram"></i></a>
                </div>
        </div>
    </div>
</footer>

<!---<script type="text/javascript" src="js/jquery.js"></script>-->
<script type="text/javascript" src="{{ URL::asset('js/jquery.js')}}"></script>
<!--<script type="text/javascript" src="js/jquery-ui.js"></script>-->
<script type="text/javascript" src="{{ URL::asset('js/jquery-ui.js')}}"></script>
<!--<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>-->
<script type="text/javascript" src="{{ URL::asset('bootstrap/js/bootstrap.min.js')}}"></script>
<!--<script type="text/javascript" src="js/plugins.js"></script>-->
<script type="text/javascript" src="{{ URL::asset('js/plugins.js')}}"></script>
<!--<script type="text/javascript" src="js/functions.js"></script>-->
<script type="text/javascript" src="{{ URL::asset('js/functions.js')}}"></script>


</body>
</html>