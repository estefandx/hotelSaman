@extends('layouts.master')
@section('titulo') Sobre Nosotros @endsection

@section('contenido')

    <section class="section-breadcrumb">
        <h2 class="title" >About the Moon Hotel</h2>
        <div class="breadcrumb">
            You are here: <span class="slug"><span class="home"> Home </span> <span class="page"> > About Us</span></span>
        </div>
    </section>


    <section class="section-style-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="title" >Our Story</h2>
                    <div class="section-starter"></div>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="content">Etiam venenatis elit in tortor dapibus, ut euismod tortor posuere. Sed id massa urna. Nam est ex, maximus bibendum magna ac, sodales feugiat justo. Maecenas a urna rhoncus, laoreet ligula vel, pellentesque lorem. Mauris fringilla sem enim, eget maximus elit lacinia at. Nulla sit amet semper massa, ac volutpat turpis.</p>
                            <p>Donec sodales erat in dapibus volutpat. Nulla a mattis lacus. Sed rhoncus purus id fermentum finibus. Suspendisse dapibus vulputate augue non interdum </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="content">
                                Pellentesque vestibulum odio vitae tellus sagittis feugiat. Pellentesque eget tortor lorem. Integer sit amet placerat est. Quisque varius nibh nulla, ac bibendum diam aliquet eu. Quisque molestie est ac porta luctus. Quisque gravida, diam sit amet condimentum placerat, eros mi vestibulum nisl, quis tincidunt neque massa quis mi. Etiam tincidunt arcu in luctus tempor. Morbi scelerisque venenatis diam, sit amet tincidunt lectus sagittis id.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-6" >
                            <img src="images/about/story-1.jpg" class="img-centered img-responsive" alt="story-1">
                        </div>
                        <div class="col-sm-6">
                            <img src="images/about/story-2.jpg"  class="img-centered img-responsive" alt="story-2">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="section-style-2 section-why-us section-bg-white">
        <div class="container">
            <div>
                <h2 class="title" >What Makes Us Different</h2>
                <div class="section-starter"></div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="content-box ">
                        <img src="images/home/why-moon-1.jpg" class="img-centered img-responsive" data-animate="fadeIn" alt="why-moon-1">
                        <h3 class="title">Offering Best Experience</h3>
                        <p class="content">Porttitor pharetra tortor in, consequat imperdiet nisi. Phasellus at quam tristique, cursus tellus vitae, convallis neque. Sed a lacinia sapien. Etiam dignissim sit amet felis ac sagittis pharetra sagittis ultrices.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="content-box">
                        <img src="images/home/why-moon-2.jpg" class="img-centered img-responsive" data-animate="fadeIn" alt="why-moon-2">
                        <h3 class="title">Luxury Rooms</h3>
                        <p class="content">Vestibulum quis posuere ligula. Fusce in odio ac diam finibus tempus. Suspendisse potenti. Etiam accumsan purus magna, et viverra neque volutpat fermentum. Vivamus consequat, felis at aliquam elementum, massa sem.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="content-box">
                        <img src="images/home/why-moon-3.jpg" class="img-centered img-responsive" data-animate="fadeIn" alt="why-moon-3">
                        <h3 class="title">Friendly & Professional Staff</h3>
                        <p class="content ">Donec condimentum id erat a molestie. In luctus quis risus cursus faucibus. Pellentesque ornare dui cursus ex dictum, eget porttitor est iaculis. Quisque vehicula iaculis purus a egestas in tortor facilisis, congue nisi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-style-2 section-testimonials-2 ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="title" >Why Choose Us</h2>
                    <div class="section-starter"></div>
                    <div class="panel-group accordion">
                        <div class="panel panel-default open">
                            <div class="panel-heading">
                                <h4 class="panel-title accordion-toggle"  >
                                    <a href="#collapse1" data-toggle="collapse" data-parent="#accordion">A random option</a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">Quisque placerat quis erat elementum laoreet. Donec tempor elit scelerisque libero consectetur, interdum convallis dui sagittis. Proin a magna maximus, congue elit egestas, tristique orci. Nullam quam arcu, egestas eget massa in, lobortis elementum enim. Aliquam suscipit nisi in dui commodo tristique. Sed mollis posuere sapien, vitae fringilla purus ornare vel.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title accordion-toggle"   >
                                    <a href="#collapse2" data-toggle="collapse" data-parent="#accordion">This is how current state looks like</a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">Quisque placerat quis erat elementum laoreet. Donec tempor elit scelerisque libero consectetur, interdum convallis dui sagittis. Proin a magna maximus, congue elit egestas, tristique orci. Nullam quam arcu, egestas eget massa in, lobortis elementum enim. Aliquam suscipit nisi in dui commodo tristique. Sed mollis posuere sapien, vitae fringilla purus ornare vel. </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title accordion-toggle" >
                                    <a href="#collapse3" data-toggle="collapse" data-parent="#accordion">Another option goes here</a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">Quisque placerat quis erat elementum laoreet. Donec tempor elit scelerisque libero consectetur, interdum convallis dui sagittis. Proin a magna maximus, congue elit egestas, tristique orci. Nullam quam arcu, egestas eget massa in, lobortis elementum enim. Aliquam suscipit nisi in dui commodo tristique. Sed mollis posuere sapien, vitae fringilla purus ornare vel. </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="title" >Testimonial</h2>
                    <div class="section-starter"></div>
                    <div class="testimonial-slider-2 swiper-container">
                        <div class="swiper-wrapper">
                            <!-- Testimonial 01 -->
                            <div class="swiper-slide">
                                <div class="testimonial-box">
                                    <p class="text">Etiam egestas nisl et risus hendrerit, eu ultrices massa tristique. Sed eget ante hendrerit dui tristique porttitor. Nunc feugiat odio sit amet magna vehicula suscipit. Nunc at urna in elit volutpat venenatis sit amet id libero. Nam sollicitudin vestibulum dui, ut tristique elit dictum in dis parturient montes.</p>
                                    <div class="tri-down"></div>
                                    <div class="profile" >
                                        <img src="images/about/avatar-1.png" class="img img-circle avatar" alt="avatar-1">
                                        <h3 class="name">Thomas Claymond</h3>
                                        <div class="position">IT Enginner</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial 02 -->
                            <div class="swiper-slide">
                                <div class="testimonial-box">
                                    <p class="text">Etiam egestas nisl et risus hendrerit, eu ultrices massa tristique. Sed eget ante hendrerit dui tristique porttitor. Nunc feugiat odio sit amet magna vehicula suscipit. Nunc at urna in elit volutpat venenatis sit amet id libero. Nam sollicitudin vestibulum dui, ut tristique elit dictum in dis parturient montes.</p>
                                    <div class="tri-down"></div>
                                    <div class="profile">
                                        <img src="images/about/avatar-2.png" class="img img-circle avatar" alt="avatar-2">
                                        <h3 class="name">Thomas Claymond</h3>
                                        <div class="position">IT Enginner</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial 03 -->
                            <div class="swiper-slide">
                                <div class="testimonial-box">
                                    <p class="text">Etiam egestas nisl et risus hendrerit, eu ultrices massa tristique. Sed eget ante hendrerit dui tristique porttitor. Nunc feugiat odio sit amet magna vehicula suscipit. Nunc at urna in elit volutpat venenatis sit amet id libero. Nam sollicitudin vestibulum dui, ut tristique elit dictum in dis parturient montes.</p>
                                    <div class="tri-down"></div>
                                    <div class="profile">
                                        <img src="images/about/avatar-3.png" class="img img-circle avatar" alt="avatar-3">
                                        <h3 class="name">Thomas Claymond</h3>
                                        <div class="position">IT Enginner</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-slider-page-controls"></div>
                </div>
            </div>

        </div>
    </section>

@endsection