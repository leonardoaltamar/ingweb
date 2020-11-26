@extends('layaut.page')

@section('title', 'Principal')

@section('content')
<div class="container">
    <br>
    <br>
    <br>
    <br>
    <div class="card-deck">
    <div class="card">
        <img class="card-img-top" src="{{asset('img/arte1.jpg')}}" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">Variedad de productos</h5>
        <p class="card-text">ArteCo cuenta con un amplio catalogo de productos, diseñados por artesanas asociadas a nuestra plataforma. Encuentra tu producto artesanal favorito aqui!</p>
        </div>
        <div class="card-footer">
        <small class="text-muted">ArteCo©</small>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="{{asset('img/arte2.jpg')}}" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">Inculsión y diversidad</h5>
        <p class="card-text">La misión de ArteCo es brindarle un espacio unico y especial a nuestra arte local y regional. Una vez seas parte de esta maravillosa comunidad, apoyras a las artesanas que mucho se han esforzado por traernos los mejores productos.</p>
        </div>
        <div class="card-footer">
        <small class="text-muted">ArteCo©</small>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="{{asset('img/arte3.jpg')}}" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">Compras al alcance de un clic</h5>
        <p class="card-text">Hicimos de ArteCo una pagina facil e intuitiva, muy facil de utilizar y se encuentra al alcance de todos, contamos con una interfaz amigable para nuestas artesanas. Ademas de asistencia personalizada.</p>
        </div>
        <div class="card-footer">
        <small class="text-muted">ArteCo©</small>
        </div>
    </div>
    </div>
</div>

@endsection
