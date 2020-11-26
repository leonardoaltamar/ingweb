@extends('layouts.adminLTE')

@section('content_header-child')
<center>
    <h2 class="mb-4">GESTION DE PRODUCTOS</h2>
</center>
@endsection

@section('content-child')
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalForm">
    <i class="fa fa-box fa-lg"></i> Nuevo Producto
</button>

<div class="modal fade" id="modalForm">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" onclick="cerrar();">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4>Ingreso y actualizacion de productos</h4>
            </div>
            <!-- Modal Body -->

            <form method="post" name="formnew" id="formnew" enctype="multipart/form-data" action="{{route('product.add')}}">
                @csrf
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="hidden" name="idUser" value="{{ Auth::user()->id }}">
                            <input type="hidden" id="idProduct" name="idProduct" value="">
                            <label for="inputEmail4">Descripcion</label>
                            <input type="text" id="desc" name="desc" class="form-control" placeholder="Nombre el producto"
                                id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress">precio</label>
                            <input type="text" id="price" name="price" class="form-control" id="inputAddress" placeholder="precio del producto">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress2">cantidad</label>
                            <input type="text" id="quantity" name="quantity" class="form-control" placeholder="cantidad del producto"
                                id="inputAddress2">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress">IVA</label>
                            <input type="text" name="iva" id="iva" class="form-control" value="0.19"
                                id="inputAddress">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress2">categoria</label>
                            <select id="category" name="category" class="form-control">
                                <option selected>Escoja una categoria</option>
                                <option>ARTESANIA</option>
                                <option>COMIDA</option>
                                <option>ROPA</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <label for="img">subir imagen del producto</label>
                        <input type="file" name="img" id="img" accept="image/* ">
                    </div>

                    <button type="submit" class="btn btn-success">
                        <i class='fa fa-save' style='font-size:20px'> </i>
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <br>
    <div class="card">
        <div class="card-header"><b>tabla de productos</b></div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                  <tr class="bg-success">
                    <th scope="col">ID</th>
                    <th scope="col">descripcion</th>
                    <th scope="col">precio</th>
                    <th scope="col">cantidad</th>
                    <th scope="col">categoria</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Acciones</th>

                  </tr>
                </thead>
                <tbody id="tableContent">
                    @foreach ($persons as $person)
                        @if ($person['usuarios_id'] == Auth::user()->id)
                            @foreach ($products as $product)
                                @if ($person['id'] == $product['emprendedores_id'])
                                    <tr id="{{$product['id']}}">
                                        <th  id="idProduct" scope="row">{{$product['id']}}</th>
                                        <td>{{$product['descripcion']}}</td>
                                        <td>{{$product['precio']}}</td>
                                        <td>{{$product['cantidad']}}</td>
                                        <td>{{$product['categoria']}}</td>
                                        <td>
                                            <center>
                                                <img src="{{asset($product->imagen)}}" width="50" alt="">
                                            </center>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-3">
                                                    <form action="{{route('product.delete',$product)}}" method="POST">
                                                        @csrf
                                                        <a href="" title='Eliminar'
                                                        onclick="return confirm('quieres eliminar')">
                                                            <button type="submit" class='btn btn-danger'>
                                                                <i class='fa fa-trash ' style='font-size:15px'> </i>
                                                            </button>
                                                        </a>
                                                    </form>
                                                </div>
                                                <div class="col-3">
                                                    <form action="" method="POST">
                                                        <button type="button" class='btn btn-info' data-toggle="modal" onclick="getAllData({{$product['id']}})" data-target="#modalForm" onclick="">
                                                            <i class='fa fa-edit' style='font-size:15px'> </i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        @else
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('js-child')
    <script>
        const getAllData = (id) =>{
            console.log(id+"");
            const table = document.getElementById('tableContent').rows[0].cells[0].innerHTML;
            const rowData = document.getElementById(id+"").children;
            console.log(rowData);
            const contentRow = [];

            for(let item of rowData){
                contentRow.push(item.firstChild.data);
            }

            const fieldDesc = document.getElementById('desc');
            const fieldPrice = document.getElementById('price');
            const fieldQuantity = document.getElementById('quantity');
            const fieldIVA = document.getElementById('iva');
            const fieldCategory = document.getElementById('category');
            const fieldId = document.getElementById('idProduct');

            fieldDesc.value = contentRow[1];
            fieldPrice.value = contentRow[2];
            fieldQuantity.value = contentRow[3];
            fieldIVA.value = contentRow[4];
            fieldCategory.value = contentRow[5];
            fieldId.value = contentRow[0];

        }
    </script>
@endsection
