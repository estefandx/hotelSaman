@extends('layouts.master')
@section('titulo') Galeria  @endsection

@section('contenido')

    <section class="section-breadcrumb">
        <h2 class="title" >Our Galleries</h2>
        <div class="breadcrumb">
            You are here: <span class="slug"><span class="home"> Home </span> <span class="page"> > Gallery</span></span>
        </div>
    </section>

    <section class="section-gallery">
        <h2 class="hidden" >Gallery section</h2>
        <div class="container">
            <div class="gallery-container">
                <div class="row gallery-row">
                    <div class="col-md-6">
                        <a href="gallery-single.html"><img src="images/gallery/gallery-1.jpg" class="img-centered img-responsive" data-animate="fadeIn" alt="gallery-1"></a>
                    </div>
                    <div class="col-md-6">
                        <p class="desc">This album has 28 photos</p>
                        <h3 class="content">Vivamus consequat, felis at aliquam elementum, massa sem dignissim elit, sit amet cursus massa EGET ANTE</h3>
                        <div class="date"><i class="fa fa-calendar-o"></i> May 22nd, 2015</div>
                        <a href="gallery-single.html" class="button secondary transparent">Detail</a>
                    </div>
                </div>
                <div class="row gallery-row">
                    <div class="col-md-6">
                        <a href="gallery-single.html"><img src="images/gallery/gallery-2.jpg" class="img-centered img-responsive" data-animate="fadeIn" alt="gallery-2"></a>
                    </div>
                    <div class="col-md-6">
                        <p class="desc">This album has 28 photos</p>
                        <h3 class="content">Vivamus consequat, felis at aliquam elementum, massa sem dignissim elit, sit amet cursus massa EGET ANTE</h3>
                        <div class="date"><i class="fa fa-calendar-o"></i> May 22nd, 2015</div>
                        <a href="gallery-single.html" class="button secondary transparent">Detail</a>
                    </div>
                </div>
                <div class="row gallery-row">
                    <div class="col-md-6">
                        <a href="gallery-single.html"><img src="images/gallery/gallery-3.jpg" class="img-centered img-responsive" data-animate="fadeIn" alt="gallery-3"></a>
                    </div>
                    <div class="col-md-6">
                        <p class="desc">This album has 28 photos</p>
                        <h3 class="content">Vivamus consequat, felis at aliquam elementum, massa sem dignissim elit, sit amet cursus massa EGET ANTE</h3>
                        <div class="date"><i class="fa fa-calendar-o"></i> May 22nd, 2015</div>
                        <a href="gallery-single.html" class="button secondary transparent">Detail</a>
                    </div>
                </div>
                <div class="row gallery-row">
                    <div class="col-md-6">
                        <a href="gallery-single.html"><img src="images/gallery/gallery-4.jpg" class="img-centered img-responsive" data-animate="fadeIn" alt="gallery-4"></a>
                    </div>
                    <div class="col-md-6">
                        <p class="desc">This album has 28 photos</p>
                        <h3 class="content">Vivamus consequat, felis at aliquam elementum, massa sem dignissim elit, sit amet cursus massa EGET ANTE</h3>
                        <div class="date"><i class="fa fa-calendar-o"></i> May 22nd, 2015</div>
                        <a href="gallery-single.html" class="button secondary transparent">Detail</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 page-controls text-center">
                        <a href="#" class="button secondary transparent"><i class="fa fa-chevron-left"></i> </a>
                        <a href="#" class="button secondary transparent">1</a>
                        <a href="#" class="button ">2</a>
                        <a href="#" class="button secondary transparent">3</a>
                        <a href="#" class="button secondary transparent"><i class="fa fa-chevron-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection