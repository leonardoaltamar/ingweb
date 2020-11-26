@extends('layouts.adminLTE')

@section('content_header-child')
<center>
    <h2 class="mb-4">Informes de productos</h2>
</center>
@endsection

@section('content-child')

<div class="container">
    <center>
        <div class="card">
            <div class="card-title"></div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">
                                <center>Ver opiniones</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $p)
                        <tr>
                            <th scope="row">{{$p['id']}}</th>
                            <td>{{$p['descripcion']}}</td>
                            <td>${{$p['precio']}}</td>
                            <td>{{$p['categoria']}}</td>
                            <td><img src="{{asset($p['imagen'])}}" width="50" alt=""></td>
                            <td>
                                <center>
                                    <a href="{{route('reporte.opiniones', $p['id'])}}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </center>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </center>


</div>
@endsection

@section('js-child')

@endsection
