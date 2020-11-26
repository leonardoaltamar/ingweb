@extends('layouts.adminLTE')

@section('plugins.Sweetalert2', true)

@section('content_header-child')
<center>
    <h2 class="mb-4">Mis facturas</h2>
</center>
@endsection
@section('content-child')
    <div class="container">
        <center>
            <div class="card col-6">
                <div class="card-title"></div>
                <div class="card-body">
                    <table class="table" >
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Total</th>
                                <th scope="col"><center>Ver detalle</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ventas as $v)
                                <tr>
                                    <th scope="row">{{$v['numero']}}</th>
                                    <td>{{$v['fecha']}}</td>
                                    <td>${{$v['total']}}</td>
                                    <td>
                                        <center>
                                            <a href="{{route('reporte.detalle', $v['id'])}}">
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
<script src="{{asset('js/shop.js')}}"></script>
@endsection
