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
        <div class="col-lg-10">
        <table id="example" class="table table-bordered">
            <thead>
            <tr>
                <th>id</th>
                <th>imagen</th>
                <th>seccion</th>
                <th>Acción</th>


            </tr>
            </thead>
            <tbody>
             @foreach($photos as $photo)
                <tr>
                    <td>{{$photo->id}}</td>
                    <td>
                        <img src="fotos/{{$photo->nombre}}" alt="foto de "{{$photo->seccion}} width="100" height="100">
                    </td>
                    <td>{{$photo->seccion}}</td>
                    <td>
                        <form  role="form"  method="post" action="{{ url("/foto/{$photo->id}") }}">
                            {{ method_field('delete') }}
                            {{ csrf_field() }}

                            <input class="btn btn-danger" type="submit" value="eliminar" />
                        </form>
                    </td>
                </tr>
                 @endforeach

            </tbody>

        </table>
            <center>{!!  $photos->render() !!}</center>
        </div>
    </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


@endsection