@extends('layouts.master')
@section('titulo') Pagina principal @endsection

@section('contenido')
    <!-- slider de las imagenes principal -->
    <div id="main-slider" class="slider">
        <div class="swiper-container">
            <h2 class="hidden">Main Slider</h2>
            <div class="swiper-wrapper">
                @foreach( $photoHotel as $photo)
                <div class="swiper-slide" style="background: url('fotos/{{$photo->nombre}}') center top/cover no-repeat">
                    <div class="container">
                        <div class="slide-content"></div>
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

    <!-- seccion de las 3 imagenes para los negocios -->
    <section class="section-why-us">
        <h2 class="title text-center" >Nuestros Servicios</h2>
        <div class="moon-divider"></div>
        <div class="container">
            <div class="row">   
                <div class="col-sm-4">
                    <div class="content-box"> 
                        <a href="{{url('/restaurante')}}"> <img src="images/home/restaurante.png" class="img-centered img-responsive" data-animate="fadeIn" alt="restaurante-las-tapas"></a>
                        <h3 class="title">Restaurante Las Tapas</h3>
                        <p class="content">Contamos con servicio de comida ejecutiva durante el día. En la noche, platos a la carta y comidas rápidas, Servicio a domicilio.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="content-box ">
                        <a href="{{url('/piscinas')}}"><img src="images/home/polideportivo.png" class="img-centered img-responsive" data-animate="fadeIn" alt="piscinas-saman"></a>
                        <h3 class="title">Piscinas Polideportivo</h3>
                        <p class="content">Espectacular lugar para que pases un dia en familia y disfrutes de un ambiente agradable en piscina</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="content-box">
                        <a href="{{url('/eventos')}}"><img src="images/home/eventos.png" class="img-centered img-responsive" data-animate="fadeIn" alt="eventos-saman"></a>
                        <h3 class="title">Samán Eventos</h3>
                        <p class="content ">Servicio especial de eventos, nos encargamos y atendemos cualquier tipo de eventos. Hacemos de sus eventos los mejores.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- seccion de mini galeria de  4 imagenes  -->
    <section class="section-facilities">
        <div class="text-center">
            <h2 class="title">Nuestras Instalaciones</h2>
        </div>
        <div class="moon-divider"></div>
        <div class="container">
            <div class="facilities-container">
                <div class="col-md-6">
                    <div class="col-sm-6">
                        <div class="content-box">
                            <img src="images/home/hotel.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="hotel-saman" width="310" height="200">
                            <div class="tri-up"></div>
                            <h3 class="title">Excelente Ubicación</h3>
                            <p class="content">Estamos ubicados en uno de los mejores sectores de Viterbo, central y tranquilo, un lugar ideal para descansar.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="content-box">
                            <h3 class="title">Ambiente Acogedor</h3>
                            <p class="content">Nuestras instalaciones estan adecuadas para que usted y su familia se sientan como en casa en cada uno de los espacios que le brindamos.</p>
                            <div class="tri-down"></div>
                            <img src="images/home/pasillo.jpg" width="310" height="200" class="img-centered img-responsive" data-animate="zoomIn" alt="ambiente-el-saman">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-sm-6">
                        <div class="content-box">
                            <img src="images/home/panel.png" class="img-centered img-responsive" data-animate="zoomIn" alt="energia-solar-hotel-saman">
                            <div class="tri-up"></div>
                            <h3 class="title">Cuidamos el Medio Ambiente</h3>
                            <p class="content">Nuestro principal compromiso es CUIDAR el Medio Ambiente, es por eso que en nuestro hotel el servicio de agua caliente se brinda por medio de energia generada por PANELES SOLARES.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="content-box">
                            <h3 class="title">Habitaciones Múltiples</h3>
                            <p class="content">Contamos con habitaciones múltiples desde parejas hasta grupos con espacios amplios a excelente costo y siempre con la mejor comodidad.</p>
                            <div class="tri-down"></div>
                            <img src="images/home/hab1.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="habitaciones-saman">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 text-center">
                    <a href="{{url('/services')}}" class="button transparent">Ver Más</a>
                </div>
            </div>
        </div>
    </section>

@endsection
