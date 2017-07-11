<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administración Hotel El Samán Viterbo</title>
    <link rel="icon" type="image/png" href="/images/logos/favicon.png" />
    <link  type='text/css'  rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link  type='text/css'  rel="stylesheet" href="{{asset('css/panel/sb-admin.css')}}">
    <link  type='text/css'  rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Hotel Saman</a>
        </div>

        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>{{ Auth::user()->name }} <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li>
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li>
                            <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Cerrar Sesion
                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        @endif
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="{{ url('/foto/create') }}"><i class="fa fa-fw fa-plus"></i> Añadir Imagenes</a>
                </li>
                <li>
                    <a href="{{ url('/') }}"><i class="fa fa-fw fa-trash"></i> Eliminar Imagenes</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
    <div class="container">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                        @yield('contenido')
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ URL::asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('bootstrap/js/bootstrap.min.js')}}"></script>

</body>

</html>
