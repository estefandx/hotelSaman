@extends('layouts.master')
@section('titulo') Contacto @endsection

@section('contenido')
    <section class="section-breadcrumb">
        <h2 class="title" >About the Moon Hotel</h2>
        <div class="breadcrumb">
            You are here: <span class="slug"><span class="home"> Home </span> <span class="page"> > Contact Us</span></span>
        </div>
    </section>

    <section class="section-style-2 section-contact-us">
        <h2 class="hidden">Contact us</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="map-wrapper">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48363.38936933083!2d-73.98671186938435!3d40.746365916129626!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b30eac9f%3A0xaca05ca48ab5ac2c!2s350+5th+Ave%2C+New+York%2C+NY+10118%2C+USA!5e0!3m2!1sen!2smy!4v1430753807808" style="border:0;height: 100%;"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="title" >The Moon Hotel</h3>
                    <div class="section-starter"></div>
                    <p class="content">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam vitae imperdiet massa, id malesuada est. Ut volutpat lorem id ante egestas, non laoreet turpis venenatis.</p>
                    <div class="row">
                        <div class="col-sm-6 office-box" >
                            <h4 class="subtitle">Headquarter</h4>
                            <div class="address-line"><i class="fa fa-map-marker"></i>23th Collins St, Melbourne, VIC</div>
                            <div class="address-line"><i class="fa fa-phone"></i>(+064)-321-6371</div>
                            <div class="address-line"><i class="fa fa-envelope"></i>info@architectura.com</div>
                            <div class="address-line"><i class="fa fa-globe"></i>http://architecturah.com</div>
                        </div>
                        <div class="col-sm-6 office-box" >
                            <h4 class="subtitle">New York Office</h4>
                            <div class="address-line"><i class="fa fa-map-marker"></i>23th Collins St, Melbourne, VIC</div>
                            <div class="address-line"><i class="fa fa-phone"></i>(+064)-321-6371</div>
                            <div class="address-line"><i class="fa fa-envelope"></i>info@architectura.com</div>
                            <div class="address-line"><i class="fa fa-globe"></i>http://architecturah.com</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3 class="title" >Drop us a line</h3>
                    <div class="section-starter"></div>
                    <form class="contact-form">
                        <div class="form-group">
                            <label class="control-label" >Name *</label>
                            <input type="text" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email *</label>
                            <input type="text" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label class="control-label">Message</label>
                            <textarea class="form-control" ></textarea>
                        </div>
                        <button class="button secondary transparent">Send Us</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <img src="images/contact-bg.jpg" class="img-centered img-responsive" alt="contact-bg">
                </div>
            </div>
        </div>
    </section>

@endsection