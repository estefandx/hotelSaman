@extends('layouts.master')
@section('titulo') Sobre Nosotros @endsection

@section('contenido')

    <section class="section-breadcrumb">
        <h2 class="title">Quienes Somos</h2>
    </section>


    <section class="section-style-2 section-why-us section-bg-white">
        <div class="container">
            <div>
                <h2 class="title" >Que nos hace diferentes</h2>
                <div class="section-starter"></div>
            </div>
            <div class="row" align="center">
                <div class="col-sm-4">
                    <div class="content-box ">
                        <!--<img src="images/home/why-moon-1.jpg" class="img-centered img-responsive" data-animate="fadeIn" alt="why-moon-1">-->
                        <h3 class="title">Misión</h3>
                        <p class="content">Para el HOTEL EL SAMÁN es un compromiso con nuestros huéspedes 
                            satisfacer a plenitud  sus expectativas con criterios de eficiencia, calidad y 
                            seguridad y mediante una óptima tecnología y recurso humano calificado a su servicio 
                            y de sus familias.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="content-box">
                      <!--  <img src="images/home/why-moon-2.jpg" class="img-centered img-responsive" data-animate="fadeIn" alt="why-moon-2">-->
                        <h3 class="title">Visión</h3>
                        <p class="content">Consolidar el HOTEL EL SAMAN como el mejor de la región, velando siempre por una 
                            excelencia en servicio y trabajando cada día por el mejoramiento de la calidad de vida de sus 
                            huéspedes y su área de influencia.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-style-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="title" >Política de Sostenibilidad</h2>
                    <div class="section-starter"></div>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="content">Promovemos la integración de los valores y principios asociados al desarrollo sostenible 
                                en nuestros procesos de negocio y en la relación con todos nuestros grupos de interés.  
                                Creemos que la sostenibilidad es el elemento clave que permitirá que el turismo siga siendo motor de la 
                                economía en tantos países.  Trabajar de forma que se pueda sobrepasar las expectativas y necesidades de 
                                nuestros clientes generando experiencias memorables, brindando el mejor servicio y fomentando en nuestro 
                                equipo la cultura de mejora continua.  Somos conscientes que el desarrollo de nuestra actividad debe 
                                realizarse respetando el medio ambiente, promoviendo programas y actividades que incentiven la conservación 
                                y disminución del impacto del mismo en el entorno de nuestros destinos turísticos a través del respeto 
                                a la fauna y flora.</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="content">
                                Nuestros colaboradores, proveedores, clientes y huéspedes están comprometidos con el mantenimiento o mejora 
                                de los impactos ambientales, socioculturales y económicos positivos y el manejo, minimización o eliminación 
                                de aquellos impactos negativos generados, que se incluyen en los deberes y derechos en pro de la sostenibilidad.
                                Estamos en contra de la explotación sexual comercial de niños, niñas y adolescentes (ESCNNA) y la 
                                discriminación de género o raza.
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
            </div>

        </div>
    </section>

@endsection