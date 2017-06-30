@extends('layouts.master')
@section('titulo')  Galeria simple  @endsection

@section('contenido')

    <section class="section-breadcrumb">
        <h2 class="title" >Our Galleries</h2>
        <div class="breadcrumb">
            You are here: <span class="slug"><span class="home"> Home </span> <span class="page"> > Gallery</span></span>
        </div>
    </section>

    <section class="section-gallery">
        <h2 class="hidden" >Gallery section</h2>
        <div class="container ">
            <div class="gallery-container">
                <div class="row gallery-row">
                    <div class="col-md-6">
                        <a href="gallery-single.html"><img src="images/gallery/gallery-1.jpg" class="img-centered img-responsive" alt="gallery" data-animate="fadeIn" data-delay="300"></a>
                    </div>
                    <div class="col-md-6">
                        <p class="desc">This album has 28 photos</p>
                        <p class="content">Vivamus consequat, felis at aliquam elementum, massa sem dignissim elit, sit amet cursus massa EGET ANTE</p>
                        <div class="date"><i class="fa fa-calendar-o"></i> May 22nd, 2015</div>
                        <div class="post-social-links">
                            <div class="header">Share this gallery</div>
                            <div class="icons">
                                <a class="social-link" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="social-link" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="social-link" href="#"><i class="fa fa-google-plus"></i></a>
                                <a class="social-link" href="#"><i class="fa fa-pinterest-p"></i></a>
                                <a class="social-link" href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr/>
                <div class="row gallery-images">
                    <div class="col-md-4 col-xs-6">
                        <a href="images/gallery/image-1.jpg" data-lightbox="gallery" data-title=""><img src="images/gallery/image-1.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="image-1"></a>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <a href="images/gallery/image-2.jpg" data-lightbox="gallery" data-title=""><img src="images/gallery/image-2.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="image-2"></a>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <a href="images/gallery/image-3.jpg" data-lightbox="gallery" data-title=""><img src="images/gallery/image-3.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="image-3"></a>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <a href="images/gallery/image-4.jpg" data-lightbox="gallery" data-title=""><img src="images/gallery/image-4.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="image-4"></a>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <a href="images/gallery/image-5.jpg" data-lightbox="gallery" data-title=""><img src="images/gallery/image-5.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="image-5"></a>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <a href="images/gallery/image-6.jpg" data-lightbox="gallery" data-title=""><img src="images/gallery/image-6.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="image-6"></a>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <a href="images/gallery/image-7.jpg" data-lightbox="gallery" data-title=""><img src="images/gallery/image-7.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="image-7"></a>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <a href="images/gallery/image-8.jpg" data-lightbox="gallery" data-title=""><img src="images/gallery/image-8.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="image-8"></a>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <a href="images/gallery/image-9.jpg" data-lightbox="gallery" data-title=""><img src="images/gallery/image-9.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="image-9"></a>
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