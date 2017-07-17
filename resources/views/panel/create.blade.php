@extends('layouts.panelmaster')

@section('contenido')
    <style>
        .header {
            color: #36A0FF;
            font-size: 27px;
            padding: 10px;
        }

        .bigicon {
            font-size: 35px;
            color: #36A0FF;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form class="form-horizontal"role="form"  method="POST" action="{{ url('/foto') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <fieldset>
                            @if(Session::has('message'))
                                <p class="alert alert-success" role="alert" style="font-size: 18px">Imagen agregada correctamente</p>
                            @endif
                            <legend class="text-center header">Agregar foto</legend>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <select class="form-control" id="seccion" name="seccion">
                                        <option value="restaurante">Pagina Restaurante Las Tapas</option>
                                        <option value="piscinas">Piscinas Polideportivo</option>
                                        <option value="hotel-saman">Hotel  Samán</option>
                                        <option value="eventos-saman">Eventos Samán</option>
                                    </select>
                                </div>
                            </div>
                          <div>
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-file bigicon"></i></span>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="file" class="btn btn-default" id="imagen" name="imagen" required>
                                    </div>
                                </div>
                            </div>









                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
                                </div>

                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


@endsection