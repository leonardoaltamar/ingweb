@extends('layouts.adminLTE')

@section('plugins.Sweetalert2', true)

@section('content_header-child')
<style>

        #form {
            width: 250px;
            margin: 0 auto;
            height: 50px;
        }

        #form p {
            text-align: center;
        }

        #form label {
            font-size: 20px;
        }

        input[type="radio"] {
            display: none;
        }

        .estrellas {
            color: grey;
        }

        .clasificacion {
            direction: rtl;
            unicode-bidi: bidi-override;
            display: inline;
        }

        .estrellas:hover,
        .estrellas:hover~.estrellas {
            color: orange;
        }

        .label-select {
            color: orange;
        }

        input[type="radio"]:checked~.estrellas {
            color: orange;
        }

</style>
<center>
    <h2 class="mb-4">{{$data->descripcion}} </h2>
    <div class="container">
        <img src="{{asset($data->imagen)}}" width="300" alt="">
        <p>Este producto pertenece al emprendedor <b>{{$data->nombreEmprendedor.' '.$data->apellidoEmprendedor}}</b></p>
    </div>
</center>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Datos del emprendedor</h3>
        </div>
        <div class="card-body">
            <p>Telefono: {{$data->telefono}}</p>
            <p>direccion: {{$data->direccion}}</p>
            <p>Correo electronico: {{ Auth::user()->email}}</p>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3>Calificaciones</h3>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('shop.calificar')}}">
                @csrf
                <input type="hidden" name="idProducto" value="{{$data->id}}">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">
                      ¿Que le parecio el producto ?
                        <p class="clasificacion">
                            <input id="radio1" type="radio" name="estrellas" value="5">
                            <label class="estrellas" for="radio1">★</label>
                            <input id="radio2" type="radio" name="estrellas" value="4">
                            <label class="estrellas" for="radio2">★</label>
                            <input id="radio3" type="radio" name="estrellas" value="3">
                            <label class="estrellas" for="radio3">★</label>
                            <input id="radio4" type="radio" name="estrellas" value="2">
                            <label class="estrellas" for="radio4">★</label>
                            <input id="radio5" type="radio" name="estrellas" value="1">
                            <label class="estrellas" for="radio5">★</label>
                        </p>
                    </label>
                    <textarea class="form-control" name="comentario" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <input type="submit" class="btn btn-success" value="Enviar">
            </form>

        </div>
    </div>

    <h3>Opiniones de otros usuarios</h3>

    @isset($listCalificaciones)
        @foreach ($listCalificaciones as $calificacion)
            <div class="card">
                <div class="card-header">
                    <h5>{{$calificacion->nombres.' '.$calificacion->apellidos}}</h5>
                </div>
                <div class="card-body">
                    <p>
                        <b>Opinion: </b>{{$calificacion->comentario}}
                    </p>
                    <p class="clasificacion">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i > $calificacion->indice)
                                <div style="display: inline"><label style="color: grey">★</label></div>
                            @else
                                <div style="display: inline"><label class="label-select">★</label></div>
                            @endif
                        @endfor
                    </p>
                </div>
            </div>
        @endforeach
    @endisset

</div>

@endsection

@section('content-child')

@endsection

@section('js-child')
@endsection
