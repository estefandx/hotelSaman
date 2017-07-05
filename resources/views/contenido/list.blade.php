@extends('layouts.panelmaster')
@section('titulo') Listar Imagenes @endsection

@section('contenido')

        <form  role="form"  method="POST" action="{{ url('/pelicula') }}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group col-lg-7" >
                <input type="text" id="nombre" name="nombre" placeholder="nombre" class="form-control" value="{{ old('nombre') }}" required autofocus>

            </div>

            <div class="form-group col-lg-7">
                <input type="text" id="duracion" name="duracion" placeholder="duracion(minutos)" class="form-control" value="{{ old('duracion') }}" required autofocus>

            </div>



            <div class="form-group col-lg-7">
                <textarea type="text" id="sinopsis" name="sinopsis" placeholder="sinopsis" class="form-control" value="{{ old('sinopsis') }}" required autofocus></textarea>

            </div>

            <div class="form-group col-lg-7">
                <input type="file" id="imagen" name="imagen" placeholder="duracion(minutos)" class="form-control"  required autofocus>

            </div>









            <div class="form-group col-lg-7">
                <button class="btn btn-success btn-md btn-block">Registrarme</button>
            </div>

        </form>

@endsection