@extends('layouts.adminLTE')

@section('plugins.Sweetalert2', true)

@section('content_header-child')
<center>
    <h1>confirmacion de la compra</h1>
</center>
@endsection

@section('content-child')
<main>
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <form id="procesar-pago" action="{{route('shop.guardar')}}" method="POST">
                    @csrf
                    <div class="form-group row">
                    </div>
                    <div class="form-group row">
                        <label for="email" name="correo" ="col-12 col-md-2 col-form-label h2">Correo :</label>
                        <div class="col-12 col-md-10">
                            <input type="email" class="form-control" readonly id="correo" value="{{ Auth::user()->email}}"
                                required>
                            <input type="hidden" name="usuarioID" class="form-control" readonly id="correo" value="{{ Auth::user()->id}}"
                                required>
                        </div>
                    </div>

                    <div id="carrito" class="table-responsive">
                        <table class="table" id="lista-compra">
                            <thead>
                                <tr>
                                    <th scope="col">Imagen</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Sub Total</th>
                                    <th scope="col">Eliminar</th>
                                </tr>

                            </thead>
                            <tbody>

                            </tbody>

                            <tr>
                                <th colspan="4" scope="col" class="text-right">TOTAL :</th>
                                <th scope="col">
                                    $<input type="text" name="total" id="total"  class="font-weight-bold border-0" readonly style="background-color: white;">
                                </th>
                                <!-- <th scope="col"></th> -->
                            </tr>

                        </table>
                    </div>
                        <center>
                            <div class="col-6">
                                <button type="submit" class="btn btn-success btn-block">Finalizar compra</button>
                                <a href="#" class="" id="procesar-compra"></a>
                                <br>
                                <br>
                                <br>
                            </div>
                        </center>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection

@section('js-child')
<script src="{{asset('js/shop.js')}}"></script>
<script src="{{asset('js/factura.js')}}"></script>
@endsection
