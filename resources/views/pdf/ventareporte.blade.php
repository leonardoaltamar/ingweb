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
    <h1 class="title">Reporte de compras</h1>

    <table width="100%", cellpadding="5px", border=1>
        <br>
        <tbody>
            <tr style="background-color: black; color: #fff;">
                <td>ID</td>
                <td>NUMERO</td>
                <td>FECHA</td>
                <td>TOTAL</td>
            </tr>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->numero}}</td>
                <td>{{$item->fecha}}</td>
                <td>{{$item->total}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
