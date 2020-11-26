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







        .estrellas {
            color: grey;
            font-size: 30px;
        }

        .clasificacion {
            direction: rtl;
            unicode-bidi: bidi-override;
            display: inline;
            font-size: 30px;
        }

        .estrellas:hover,
        .estrellas:hover~.estrellas {
            color: orange;
            font-size: 30px;
        }

        .label-select {
            color: orange;
            font-size: 30px;
        }

        input[type="radio"]:checked~.estrellas {
            color: orange;
            font-size: 30px;
        }
    </style>
</head>

<body>
    <div class="container__title">
        <img class="container__title__img" src="{{asset('img/logoartecol.jpeg')}}" alt="">
        <h3 class="title">Empresa comprometida con el emprendimiento</h3>
    </div>
    <h3>Opiniones del producto</h3>

    <table width="100%", cellpadding="5px", border=1 class="products">
        <br>
        <tbody>
            <tr class="header">
                <td>Id</td>
                <td>Nombre del cliente</td>
                <td>Comentario</td>
                <td>Puntuación del producto</td>
            </tr>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nombres. ' '.$item->apellidos}}</td>
                <td>{{$item->comentario}}</td>
                <td>
                    <p class="clasificacion">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i > $item->indice)
                                <div style="display: inline"><label style="color: grey; font-size:30px">*</label></div>
                            @else
                                <div style="display: inline"><label class="label-select">*</label></div>
                            @endif
                        @endfor
                    </p>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <i>Propiedad de <b>ArteCO</b></i>
</body>

</html>
