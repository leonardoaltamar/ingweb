@extends('layouts.adminLTE')

@section('plugins.Sweetalert2', true)

@section('content_header-child')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Carrito
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="container" id="carrito">
                        <table id="lista-carrito" class="table">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>

                        <a href="#" id="vaciar-carrito" class="btn btn-primary btn-block">Vaciar Carrito</a>
                        <a href="#" id="procesar-pedido" class="btn btn-danger btn-block">Procesar
                            Compra</a>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</nav>
<center>
    <h2 class="mb-4">Portal de ventas</h2>
</center>
@endsection

@section('content-child')
<div class="container">
    <p>aqui va toda la logica del carrito de compras</p>
    <form action="{{route('shop.getCategory')}}" method="post">
        @csrf
        <div class="row">
            <div class="col">
                <select name="category" class="form-control">
                    <option>ARTESANIA</option>
                    <option>COMIDA</option>
                    <option>ROPA</option>
                </select>
            </div>
            <div class="col-4">
                <button type="submit" class="btn btn-primary col-6">filtrar</button>
            </div>
        </div>
    </form>

    <br>
    @isset($products)
    <div class="row" id="lista-productos">

        @foreach ($products as $item)
        <div class="card mb-8 shadow-sm col-4" style="text-align: center">
            <div class="card-header">

                    <h5 class="my-0 font-weight-bold">{{$item['descripcion']}}</h5>

            </div>
            <div class="card-body">
                    <img style="width: 8em; height: 8em;" class="col-8" src="{{asset($item->imagen)}}" alt="Card image cap">
                    <p class="card-text precio">$<span>{{$item['precio']}}</span></p>
                    <a href="#" class="btn btn-primary add-car" data-id="{{$item['id']}}">Agregar al carrito</a>
                    <br>
                    <a href="#" class="detalle-producto" data-id="{{$item['id']}}" id="detalleProducto" style="font-size: 14px">Detalle del producto</a>
            </div>

        </div>
    @endforeach
</div>
@endisset
</div>

@endsection

@section('js-child')
<script src="{{asset('js/shop.js')}}"></script>
@endsection
