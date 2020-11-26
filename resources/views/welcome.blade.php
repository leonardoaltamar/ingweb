@extends('layaut.page')

@section('title', 'Principal')
    
@section('content')
<div class="slideshow">
    <ul class="slider">
        <li>
            <img src="{{asset('img/mujer.png')}}" alt="">
            <section class="caption">
                <h1>BIENVENIDOS</h1>
                <p>¡Te presentamos el mejor modelo de negocio para que puedas alcanzar tus sueños!</p>
                <a href="" class="naranja">Empezar ya</a>
            </section>
        </li>
        <li>
            <img src="{{asset('img/mujer2.png')}}" alt="">
            <section class="caption">
                <h1>NO PIERDAS TU TIEMPO</h1>
                <p>Si actualmente no tienes un trabajo puedes intentarlo ahora. ¡Intentalo ahora! </p>
                <a href="#">Suscribete </a>
            </section>
        </li>
        <li>
            <img src="{{asset('img/taller.png')}}" alt="">
            <section class="caption">
                <h1>NO ESTARAS SOLO</h1>
                <p>Hay toda una comunidad esperando a que te unas como cliente o trabajador, ¡Hazlo ya!</p>
                <a href="{{route('login')}}" class="negro">Iniciar sesión</a>
            </section>
        </li>

    </ul>

    <!-- <ol class="pagination">
			
		</ol> -->

    <div class="left">
        <span class="fa fa-chevron-left"></span>
    </div>

    <div class="right">
        <span class="fa fa-chevron-right"></span>
    </div>
</div>

<!-- APP, CUERPO DE LA PAGINA -->


<div class="app">
    <div class="container">
        <div class="row title">
            <div class="text-center">
                <h2 class="text-center">ACTUALIZA TU NEGOCIO CON LA MEJOR TECNOLOGIA</h2>
            </div>
            <h4 class="text-center">A continuación te presentaremos las caracteristicas principales del sistema
                <b>repair-lp</b></h4>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                <img src="{{asset('img/logos/diamante.png')}}" class="card-img-top" alt="papas">
                    <div class="card-body">
                        <h4 class="card-title"><b>App brillante</b></h4>
                        <p> El objetivo de <b>repair LP</b> es promoveer el trabajo independiente de tal manera que cualquier persona
                            con conocimientos pero sin titulaciones pueda trabajar.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset('img/logos/telefono-inteligente.png')}}" class="card-img-top" alt="papas">
                    <div class="card-body">
                        <h4 class="card-title"><b>Entorno virtual</b></h4>
                        <p>No necesitas mucho para usar la aplicación, solo necesitas disponer de medios digitales para contactar
                            con toda la comunidad.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset('img/logos/informacion.png')}}" class="card-img-top" alt="papas">
                    <div class="card-body">
                        <h4 class="card-title"><b>Ahorro de tiempo</b></h4>
                        <p>Ya no tendrás que gastar tiempo buscando talleres, mecanicos, tecnicos y plomeros para arreglar un problema.
                            ¡Nosotros lo hacemos por tí!
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset('img/logos/idea.png')}}" class="card-img-top" alt="papas">
                    <div class="card-body">
                        <h4 class="card-title"><b>Es innovadora</b></h4>
                        <p>Son pocas las aplicaciones de este tipo, y el equipo de trabajo de garantiza una solución a los problemas con todos tus
                            electrodomesticos y medios de transporte.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset('img/logos/scooter.png')}}" class="card-img-top" alt="papas">
                    <div class="card-body">
                        <h4 class="card-title"><b>Domicilios</b></h4>
                        <p>No gastes dinero en transportadoras para llevar tu electrodomestico dañado, ¡ahora nosotros vamos
                            a tu viviendda a solucionar tu problema!
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset('img/logos/personas.png')}}" class="card-img-top" alt="papas">
                    <div class="card-body">
                        <h4 class="card-title"><b>Clientes</b></h4>
                        <p>Hoy en dia hay un gran mercado en internet, y tu tendrás acceso a todo ese publico para demostrar tu talento
                            ¡no pierdas la oportunidad!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<CENTER>
    <h2>TESTIMONIOS</h2>
</CENTER>
<br>

<main>
    <center>
        <div class="container">
            <div class="row">
                <br>
                <br>
                <!-- <h1>¿QUE HAN DICHO LAS PERSONAS DE NUESTRA APP?</h1> -->
                <br>
                <br>
                <br>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">

                        <img src="{{asset('img/logos/persona1.png')}}" class="card-img-top" alt="papas">
                        <div class="card-body">
                            <h4 class="card-title"><b>¡Una app Increible!</b></h4>
                            <p>Una aplicacion super util para todos en mi hogar, ahora no necesito llamar por
                                telefono al taller, todo desde la app!</p>
                            <p class="autor">Juan Carlos Gomez</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">

                        <img src="{{asset('img/logos/persona2.png')}}" class="card-img-top" alt="papas">
                        <div class="card-body">
                            <h4 class="card-title"><b>¡Muy facil de usar!</b></h4>
                            <p>No se mucho de la tecnologia de hoy, pero la aplicacion es muy facil de usar, te
                                muestran
                                todo lo
                                que debes hacer.</p>
                            <p class="autor">Mercedes Perez</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">

                        <img src="{{asset('img/logos/persona3.png')}}" class="card-img-top" alt="papas">
                        <div class="card-body">
                            <h4 class="card-title"><b>Revolucionaria</b></h4>
                            <p>Ya todos mis amigos la tienen, la utilizo casi a diario para pedir todo lo que
                                necesito,
                                de
                                mis
                                aplicaciones favoritas.</p>
                            <p class="autor">Daniela Jaimes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
</main>
@endsection