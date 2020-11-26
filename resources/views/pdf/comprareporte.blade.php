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

    <h3>Reporte de compras</h3>

    <table width="100%", cellpadding="5px", border=1 class="products">
        <br>
        <tbody>
            <tr  class="header">
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
    <br>
    <br>
    <i>Propiedad de <b>ArteCO</b></i>
</body>

</html>
