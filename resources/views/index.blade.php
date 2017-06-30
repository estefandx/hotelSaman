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
                <div class="swiper-slide" style="background: url('images/home/slider-2.jpg') center top/cover no-repeat">
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
        <h2 class="title text-center" >Why the Moon Hotel</h2>
        <div class="moon-divider"></div>
        <div class="container">
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

    <!-- seccion de mini galeria de  4 imagenes  -->
    <section class="section-facilities">
        <div class="text-center">
            <h2 class="title">The Moon's Facilities</h2>
        </div>
        <div class="moon-divider"></div>
        <div class="container">
            <div class="facilities-container">
                <div class="col-md-6">
                    <div class="col-sm-6">
                        <div class="content-box">
                            <img src="images/facility-1.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-1">
                            <div class="tri-up"></div>
                            <h3 class="title">SPA Treatments & Massage</h3>
                            <p class="content">Nullam ultrices, urna nec malesuada aliquam, neque massa auctor metus, vulputate tristique enim nulla quis ante. Sed vel leo turpis. In in tortor fringilla, scelerisque quam eu, aliquet massa.lorem.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="content-box">
                            <h3 class="title">Indoor Heated Pool</h3>
                            <p class="content">Vivamus eros dolor, auctor aliquet dolor sit amet, euismod imperdiet ex. Nam sed nulla sed massa suscipit feugiat. Mauris et nunc ornare, placerat ex ac, interdum magna. Donec mollis tellus non sem pulvinar.</p>
                            <div class="tri-down"></div>
                            <img src="images/facility-2.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-2">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-sm-6">
                        <div class="content-box">
                            <img src="images/facility-3.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-3">
                            <div class="tri-up"></div>
                            <h3 class="title">Fitness Rooms</h3>
                            <p class="content">Suspendisse euismod, neque faucibus dictum rutrum, ex dolor tempor dolor, ut egestas velit tellus quis erat. Curabitur vel elit a nibh fringilla maximus.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="content-box">
                            <h3 class="title">Dedicated Events Planner</h3>
                            <p class="content">Molestie condimentum tellus. Vivamus nec lectus congue, ultrices felis sit amet, dapibus augue. Cras fringilla efficitur elementum. Mauris ac consectetur nibh. Mauris tincidunt dolor justo, ac accumsan.</p>
                            <div class="tri-down"></div>
                            <img src="images/facility-4.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-4">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 text-center">
                    <a href="facilities.html" class="button transparent" >See All Facilities</a>
                </div>
            </div>
        </div>
    </section>


   <!-- seccion testemonios para evaluar-->
    <section class="section-testimonials bg-primary">
        <div class="text-center">
            <h2 class="title">Testimonial</h2>
        </div>
        <div class="moon-divider"></div>
        <div class="container">
            <div class="testimonial-slider swiper-container">
                <div class="swiper-wrapper">
                    <!-- Testimonial 01 -->
                    <div class="swiper-slide">
                        <div class="testimonial-box">
                            <p class="text">Aliquam sodales facilisis dolor, feugiat elementum tellus condimentum at. Mauris sem nisi, dictum eget facilisis quis, placerat eu nisl. Phasellus consectetur pharetra elit id maximus. Aliquam facilisis sodales erat, sit amet euismod eros dignissim aliquam pulvinar metus.</p>
                            <h4 class="name">Charles Coleman</h4>
                            <div class="position">CEO of Pineapple</div>
                        </div>
                    </div>
                    <!-- Testimonial 02 -->
                    <div class="swiper-slide">
                        <div class="testimonial-box">
                            <p class="text">Aliquam sodales facilisis dolor, feugiat elementum tellus condimentum at. Mauris sem nisi, dictum eget facilisis quis, placerat eu nisl. Phasellus consectetur pharetra elit id maximus. Aliquam facilisis sodales erat, sit amet euismod eros dignissim aliquam pulvinar metus.</p>
                            <h4 class="name">Charles Coleman</h4>
                            <div class="position">CEO of Pineapple</div>
                        </div>
                    </div>
                    <!-- Testimonial 03 -->
                    <div class="swiper-slide">
                        <div class="testimonial-box">
                            <p class="text">Aliquam sodales facilisis dolor, feugiat elementum tellus condimentum at. Mauris sem nisi, dictum eget facilisis quis, placerat eu nisl. Phasellus consectetur pharetra elit id maximus. Aliquam facilisis sodales erat, sit amet euismod eros dignissim aliquam pulvinar metus.</p>
                            <h4 class="name">Charles Coleman</h4>
                            <div class="position">CEO of Pineapple</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider-page-controls"></div>
        </div>
    </section>

@endsection
