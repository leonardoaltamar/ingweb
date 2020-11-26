<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,400;1,100;1,300&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/css/mdb.min.css" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css') }}">

    <title>ArteCO | @yield('title')</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark gris scrolling-navbar fixed-top">
            <a class="navbar-brand navbar-nav col-4" href="">ArteCO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav col-md-10">
                    <li class="nav-item ">
                        <a class="nav-link">Inicio <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('conocenos')}}">Conócenos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('servicio')}}">Servicio al cliente</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Iniciar sesión</a>
                    </li>


                </ul>

            </div>
        </nav>
    </header>
    @yield('content')

    <footer>
        <div class="info">
          <p>Puede contactarnos si desea mucha más informacion:</p>
          <p class="correo">tuservicio@repairlp.com</p>
          <p>Linea de atención: 01 8000 2542</p>
          <br>
          <img src="{{asset('img/logos/facebook.png')}}" alt="">
          <img src="{{asset('img/logos/twitter.png')}}" alt="">
          <img src="{{asset('img/logos/instagram.png')}}" alt="">
        </div>

      </footer>

    <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/jquery-3.1.0.min.js')}}"></script>
</body>

</html>
