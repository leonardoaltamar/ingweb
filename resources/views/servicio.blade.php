@extends('layaut.page')

@section('title', 'Principal')

@section('content')
<div class="container">
    <br>
    <br>
    <br>
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Servicio al Cliente</h1>
        <p class="lead">Aqui encontraras nuestros canales de atencion personalizados.</p>
    </div>
    </div>
    <div class="card text-center">
    <div class="card-body">
        <p style="font-size:24px; color:red" >☎</p>
        <h5 class="card-title">Lineas de atencion</h5>
        <p class="card-text">Barranquilla: (5) 355 56 56</p>
        <p class="card-text">Bogota: (1) 612 04 04</p>
        <p class="card-text">Cartagena: (5) 355 55 55</p>
        <p class="card-text">Medellin: (4) 510 20 21</p>
        <p class="card-text">Resto del pais: 01800 10 40404</p>
    </div>
    </div>
    <div class="card text-center">
    <div class="card-body">
        <p style="font-size:24px">✉</p>
        <h5 class="card-title">Correo electronico</h5>
        <p class="card-text">Puedes contactarnos en el correo:</p>
        <p class="card-text">contactenos@arteco.com</p>
    </div>
    </div>
    <div class="card text-center">
    <div class="card-body">
        <p style="font-size:24px">✓</p>
        <h5 class="card-title">Dejanos tu opinion</h5>
        <p class="card-text">Te dejaremos un espacio para que nos cuentes tu experiencia, o si tienes alguna sugerencia.</p>
        <p class="card-text">Clic aqui para que dejes tus comentarios</p>
    </div>
    </div>
</div>

@endsection
