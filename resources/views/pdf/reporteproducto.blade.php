<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .title{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
    </style>
</head>

<body>
    <h1 class="title">Listado de productos</h1>

    <table width="100%", cellpadding="5px", border=1>
        <br>
        <tbody>
            <tr style="background-color: black; color: #fff;">
                <td>id</td>
                <td>descripcion</td>
                <td>Categoria</td>
                <td>Imagen</td>
            </tr>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->descripcion}}</td>
                <td>{{$item->categoria}}</td>
                <td><img src="{{asset($item->imagen)}}" style="width:50px" alt=""></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
