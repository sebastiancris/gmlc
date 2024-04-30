<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GRUPO MINERO LAS CENIZAS') }}..</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <link href="https://cdn.rawgit.com/westonganger/bootstrap-directional-buttons/master/dist/bootstrap-directional-buttons.css" rel="stylesheet" type="text/css" />


    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap4.js"></script>

    <script src="https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.js
"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.print.min.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'GRUPO MINERO LAS CENIZAS') }} -->
                    GRUPO MINERO LAS CENIZAS
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('INGRESO') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTRO') }}</a>
                                </li>
                            @endif
                        @else
                     </ul>

        @if(auth::user()->perfil==0)
          <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FONDOS CONCURSABLES</a>
                <div class="dropdown-menu" aria-labelledby="dropdown08">
                  <a class="dropdown-item" href="{{ route('postularFondos') }}">POSTULAR FONDOS CONCURSABLES.</a>
                  <a class="dropdown-item" href="{{ route('verPostulacionesFondos') }}">VER ESTADO POSTULACIONES</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">APOYO PROYECTOS</a>
                <div class="dropdown-menu" aria-labelledby="dropdown08">
                  <a class="dropdown-item" href="{{ route('postularProyectos') }}">POSTULAR PROYECTOS</a>
                  <a class="dropdown-item" href="{{ route('seguimientoProyectos') }}">VER ESTADO POSTULACIONES</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RECLAMOS/SUGERENCIAS</a>
                <div class="dropdown-menu" aria-labelledby="dropdown08">
                  <a class="dropdown-item" href="{{ route('enviarCaso') }}">INGRESAR CASO</a>
                  <a class="dropdown-item" href="{{ route('seguimientoCasosUsu') }}">VER ESTADO DEL CASO </a>
                </div>
              </li>
            </ul>
          </div>          
        @endif    

        @if(auth::user()->perfil==1)
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USUARIOS</a>
                <div class="dropdown-menu" aria-labelledby="dropdown08">
                  <a class="dropdown-item" href="{{ route('usuariosRegistrados') }}">VER TODOS</a>
                  <a class="dropdown-item" href="#">ASIGNAR INFLUENCIA, VECINDAD, AFINIDAD</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FONDOS CONCURSABLES</a>
                <div class="dropdown-menu" aria-labelledby="dropdown08">
                  <a class="dropdown-item" href="#">CREAR FONDOS CONCURSABLE</a>
                  <a class="dropdown-item" href="{{ route('verPostulacionesFondos') }}">VER POSTULACIONES</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">APOYO PROYECTOS</a>
                <div class="dropdown-menu" aria-labelledby="dropdown08">
                  <a class="dropdown-item" href="#">PROYECTOS ENVIADOS</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RECLAMOS Y SUGERENCIAS</a>
                <div class="dropdown-menu" aria-labelledby="dropdown08">
                  <a class="dropdown-item" href="{{ route('seguimientoCasosAdmin') }}">VER CASO</a>
                </div>
              </li>
            </ul>
        </div>
        @endif
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                  

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> HOLA 
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                          
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">
                                        {{ __('PERFIL PERSONAL') }}
                                    </a>
                                     <a class="dropdown-item" href="#">
                                        {{ __('PERFIL PERSONA JURIDICA') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('editarPerfil') }}">
                                        {{ __('EDITAR PERFIL') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('CERRAR SESIÓN') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-1">
            @yield('content')
        </main>
    </div>

    <div class="container">
    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">VOLVER A MENU PRINCIPAL</a>
        </p>
        <p>PARA MAYOR INFORMACIÓN, CONSULTA O DUDAS <b>+56991594961 / XXXXX@CENIZAS.CL</b></p>
        <!-- <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p> -->
      </div>
    </footer>
</div>

</body>
</html>
