@extends('layouts.adminLTE')

@section('content_header-child')
<center>
    <h2 class="mb-4">DATOS DE USUARIO</h2>
</center>
@endsection

@section('content-child')
<div class="container">
    <div class="card">
        <div class="card-header">
            <b>
                fomulario de ingreso de datos

            </b>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('person.add')}}">
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Documento</label>
                        <input type="hidden" name="idUser" value="{{ Auth::user()->id }}">
                        <input type="text" name="document" class="form-control" placeholder="documento de identidad" id="inputEmail4">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Nombres</label>
                        <input type="text" name="names" class="form-control" placeholder="nombres" value="{{ Auth::user()->name }}" id="inputEmail4">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputPassword4">Apellidos</label>
                        <input type="text" name="lastnames" class="form-control" placeholder="apellidos" id="inputPassword4">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress">direccion</label>
                        <input type="text" name="address" class="form-control" placeholder="direccion de residencia" id="inputAddress" placeholder="calle 12 # 3-17">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAddress2">Telefono</label>
                        <input type="text" name="phone" class="form-control" placeholder="Telefono celular" id="inputAddress2"
                            placeholder="Apartment, studio, or floor">
                    </div>
                </div>

                <button type="submit" class="btn btn-success">
                    <i class='fa fa-save' style='font-size:20px'> </i>
                    Guardar
                </button>
                <button type="submit" class="btn btn-primary">
                    <i class='fa fa-edit' style='font-size:20px'></i>
                    Actualizar
                </button>
            </form>
        </div>
    </div>

</div>
@endsection
