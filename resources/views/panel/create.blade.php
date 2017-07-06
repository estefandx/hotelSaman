@extends('layouts.panelmaster')

@section('contenido')
    <div class="conteiner">
    <form  role="form"  method="POST" action="{{ url('/foto') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <fieldset>

            <div class="form-group">
                <label for="sel1">Select list:</label>
                <select class="form-control" id="seccion" name="seccion">
                    <option value="prueba">1</option>
                    <option value="prueba">1</option>
                    <option value="prueba">1</option>
                    <option value="prueba">1</option>
                </select>
            </div>
            <div class="form-group">
                <input type="file" class="btn btn-default" id="imagen" name="imagen">
            </div>

        </fieldset>
        <div>
            <button class="btn btn-primary ">Registrar</button>
        </div>

    </form>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


@endsection