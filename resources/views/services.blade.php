@extends('layouts.master')
@section('titulo') Servicios @endsection

@section('contenido')

    <section class="section-breadcrumb">
        <h2 class="title" >Nuestros Servicios</h2>
    </section>

    <section class="section-facilities">
        <h2 class="hidden">Services</h2>
        <div class="container">
            <div class="facilities-container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="content-box">
                            <img src="images/servicios/hotel.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-1">
                            <div class="tri-up"></div>
                            <h3 class="title">Ubicación</h3>
                            <p class="content">Estamos ubicados en uno de los mejores sectores de Viterbo, central y tranquilo, un lugar ideal para descansar.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="content-box">
                            <img src="images/servicios/hab1.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-2">
                            <div class="tri-up"></div>
                            <h3 class="title">Cómodas Habitaciones</h3>
                            <p class="content">Nuestras habitaciones cuentan con todo para que este siempre comodo, ducha con agua caliente, tv, wifi y muy buena ventilación para que su descanso sea mejor.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="content-box">
                            <img src="images/servicios/hab2.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-3">
                            <div class="tri-up"></div>
                            <h3 class="title">Habitaciones Múltiples</h3>
                            <p class="content">Contamos con habitaciones múltiples desde parejas hasta grupos con espacios amplios a excelente costo y siempre con la mejor comodidad.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="content-box">
                            <img src="images/servicios/pasillo.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-4">
                            <div class="tri-up"></div>
                            <h3 class="title">Nuestro Servicio</h3>
                            <p class="content">Nuestras instalaciones estan adecuadas para que usted y su familia se sientan como en casa en cada uno de los espacios que le brindamos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection