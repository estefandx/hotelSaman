@extends('layouts.master')
@section('titulo') Contacto @endsection

@section('contenido')
    <section class="section-breadcrumb">
        <h2 class="title" >Contáctanos</h2>
    </section>

    <section class="section-style-2 section-contact-us">
        <h2 class="hidden">Contact us</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    @if(Session::has('message'))
                        <p class="alert alert-success" role="alert" style="font-size: 18px">Correo enviado pronto te contactaremos!</p>
                    @endif
                    <div class="map-wrapper">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3341.9420340929587!2d-75.87373969697343!3d5.061348794080337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e47853723ddca91%3A0x4353051771308e8!2sCra.+9+%238-51%2C+Viterbo%2C+Caldas%2C+Colombia!5e0!3m2!1ses!2ses!4v1499063629639" style="border:0;height: 100%;"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="title" >El Samán Hotel Viterbo</h3>
                    <div class="section-starter"></div>
                    <p class="content">A continuación encuentra todos nuestros datos de contacto, dirección, telefono y correo. Comuniquese con nosotros y reciba la mejor atención</p>
                    <div class="row">
                        <div class="col-sm-6 office-box" >
                            <h4 class="subtitle">Viterbo - Caldas</h4>
                            <div class="address-line"><i class="fa fa-map-marker"></i>Carrera 9 # 8 -51, Viterbo</div>
                            <div class="address-line"><i class="fa fa-phone"></i>869 1136 - (+57)313 711 9851</div>
                            <div class="address-line"><i class="fa fa-envelope"></i>hotelelsamanviterbo@hotmail.com</div>
                            <div class="address-line"><i class="fa fa-globe"></i>http://hotelelsaman.com</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h3 class="title" >¡Escríbenos!</h3>
                    <div class="section-starter"></div>
                    <form class="contact-form" role="form" method="POST" action="{{url('/mail')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="control-label" >Motivo de Consulta *</label>
                            <select class="form-control" id="seccion" name="seccion">
                            <option value="Reserva">Solicitud de Reserva</option>
                            <option value="Comentarios">Comentarios</option>
                            <option value="Eventos">Información Eventos</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" >Nombre *</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email *</label>
                            <input type="text" class="form-control" id="mail" name="mail">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Número Telefónico *</label>
                            <input type="text" class="form-control" id="numero" name="numero">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mensaje</label>
                            <textarea class="form-control" id="mensaje" name="mensaje"></textarea>
                        </div>
                        <button class="button secondary transparent">Enviar</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <img src="images/otras/reception.jpg" class="img-centered img-responsive" alt="contact-bg">
                </div>
            </div>
        </div>
    </section>

@endsection