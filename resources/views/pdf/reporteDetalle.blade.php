<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        *{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .title{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .container__title__img {
            width: 7.5em;
        }
        .title {
            float: right;
            margin-top: 0
        }

        .products {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        .products td, .products th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .products tr:nth-child(even){background-color: #f2f2f2;}

        .products tr:hover {background-color: #ddd;}

        .products .header {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background: #4CAF50;
            color: white;
        }

    </style>
</head>

<body>
    <div class="container__title">
        <img class="container__title__img" src="{{asset('img/logoartecol.jpeg')}}" alt="">
        <h3 class="title">Empresa comprometida con el emprendimiento</h3>
    </div>
    <h3>Detalle de la factura</h3>

    <table width="100%", cellpadding="5px", border=1 class="products">
        <br>
        <tbody>
            <tr class="header">
                <td>descripcion</td>
                <td>Categoria</td>
                <td>Precio</td>
                <td>Cantidad</td>
                <td>Imagen</td>
            </tr>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->descripcion}}</td>
                <td>{{$item->categoria}}</td>
                <td>{{$item->precio}}</td>
                <td>{{$item->cantidad}}</td>
                <td><img src="{{asset($item->imagen)}}" style="width:50px" alt=""></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <i>Propiedad de <b>ArteCO</b></i>
</body>

</html>
