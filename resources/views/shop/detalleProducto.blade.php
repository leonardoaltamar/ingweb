@extends('layouts.adminLTE')

@section('plugins.Sweetalert2', true)

@section('content_header-child')
<center>
    <h2 class="mb-4">{{$data->descripcion}} </h2>
    <div class="container">
        <img src="{{asset($data->imagen)}}" width="300" alt="">
    <p>Este producto pertenece al emprendedor <b>{{$data->nombreEmprendedor.' '.$data->apellidoEmprendedor}}</b></p>
    </div>
</center>
<a href="{{route('shop.imprimir')}}">generar PDF</a>
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
</div>

@endsection

@section('content-child')

@endsection

@section('js-child')
@endsection
