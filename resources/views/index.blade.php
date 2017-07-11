@extends('layouts.master')
@section('titulo') Pagina principal @endsection

@section('contenido')
    <!-- slider de las imagenes principal -->
    <div id="main-slider" class="slider">
        <div class="swiper-container">
            <h2 class="hidden">Main Slider</h2>
            <div class="swiper-wrapper">
                <!-- Slide 01 -->
                <div class="swiper-slide" style="background: url('images/home/slider-1.jpg') center top/cover no-repeat">
                    <div class="container">
                        <div class="slide-content">
                           <!-- <div class="slide-subtitle" data-animate="fadeInRight">BIENVENIDOS!</div>
                            <h3 class="slide-title" data-animate="fadeInDown"><strong>EL Samán Viterbo</strong>Hotel</h3>
                            <div class="slide-divider" data-animate="fadeInRight"></div>
                            <div class="slide-subtitle-italic" data-animate="fadeInRight" data-delay="300">bringing to you the best experience from only <span class="price">$149</span> / night</div>
                            <a href="#" class="button transparent" data-animate="fadeInRight" data-delay="300">Get this offer</a>-->
                        </div>
                    </div>
                </div>
                <!-- Slide 02 -->
                <div class="swiper-slide" style="background: url('images/home/slider-2.png') center top/cover no-repeat">
                    <div class="container">
                        <div class="slide-content">
                           <!-- <div class="slide-subtitle" data-animate="fadeInRight">BIENVENIDOS!</div>
                            <h3 class="slide-title" data-animate="fadeInDown"><strong>EL Samán Viterbo</strong>Hotel</h3>
                            <div class="slide-divider" data-animate="fadeInRight"></div>
                            <div class="slide-subtitle-italic">bringing to you the best experience from only <span class="price">$149</span> / night</div>
                            <a href="#" class="button transparent">Get this offer</a>-->
                        </div>
                    </div>
                </div>
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
                        <a href="{{url('/restaurante')}}"> <img src="images/home/restaurante.png" class="img-centered img-responsive" data-animate="fadeIn" alt="why-moon-2"></a>
                        <h3 class="title">Restaurante Las Tapas</h3>
                        <p class="content">Definir Texto</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="content-box ">
                        <a href="{{url('/piscinas')}}"><img src="images/home/polideportivo.png" class="img-centered img-responsive" data-animate="fadeIn" alt="why-moon-1"></a>
                        <h3 class="title">Piscinas Polideportivo</h3>
                        <p class="content">Definir Texto</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="content-box">
                        <a href="{{url('/eventos')}}"><img src="images/home/eventos.png" class="img-centered img-responsive" data-animate="fadeIn" alt="why-moon-3"></a>
                        <h3 class="title">Samán Eventos</h3>
                        <p class="content ">Definir Texto</p>
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
                            <img src="images/home/hotel.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-1" width="310" height="200">
                            <div class="tri-up"></div>
                            <h3 class="title">Excelente Ubicación</h3>
                            <p class="content">Definir texto</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="content-box">
                            <h3 class="title">Ambiente Acogedor</h3>
                            <p class="content">Definir texto</p>
                            <div class="tri-down"></div>
                            <img src="images/home/pasillo.jpg" width="310" height="200" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-2">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-sm-6">
                        <div class="content-box">
                            <img src="images/home/hab2.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-3">
                            <div class="tri-up"></div>
                            <h3 class="title">Habitación Cómoda</h3>
                            <p class="content">Definir texto</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="content-box">
                            <h3 class="title">Habitaciones Múltiples</h3>
                            <p class="content">Definir texto</p>
                            <div class="tri-down"></div>
                            <img src="images/home/hab1.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-4">
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
