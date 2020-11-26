@extends('layouts.adminLTE')

@section('plugins.Sweetalert2', true)

@section('content_header-child')

<center>
    <h2 class="mb-4">Bienvenido al portal de ArteCO</h2>
</center>
@endsection

@section('content-child')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reporte de ventas') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Lista de reportes mas buscados') }}
                    <ul>
                        <li><a href="{{route('shop.ReporteVentas', Auth::user()->id)}}">Reporte de compras</a></li>
                        <li><a href="{{route('reportes.proteccion', Auth::user()->id)}}">Ley de proteccion de datos</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js-child')
    @isset($message)
    <script>
        Swal.fire(
            'Perfecto!',
            'Los datos han sido ingresados correctamente',
            'success'
        )
    </script>
    @endisset
@endsection
