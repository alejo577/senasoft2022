<?php
$sesionadmin=session('sesionadmin');
if(!isset($sesionadmin)){
    echo "<script>alert('Inicie Sesion');window.location = 'elije'</script>";
}
?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="/senasoft2022/resources/css/estilosadmin.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="navegador">
            <ul>
            <li class="li"><a class="a" href="{{route('indexadmin')}}">INICIO</a></li>

            <li class="li"><a  class="a" href="{{route('resultados')}}">RESULTADOS</a></li>
            <li class="li"><a  class="a" href="{{route('estadisticas')}}">ESTADISTICAS</a></li>
            <li class="li"><a  class="a" href="{{route('certificados')}}">CERTIFICADOS</a></a></li>
            <?php
            if(isset($sesionadmin)){
            echo "<li class='li'><a class='a'>USUARIO: $sesionadmin</a></li><li class='li'><a class='a' href='old'>cerrar sesion</a></li>";
            }else{
            echo "<li class='li'><a class='a' href='elije'>INICIAR SESION</a></li>";
            }
            ?>

        </ul>
            </div>
        <main class="py-4">

            @yield('content')
        </main>
    </div>


    <footer class="footer">

        <div class="titulofooter">
            <p>Sondeos colombia interactua con su gente</p>
        </div>



            <div class="redes">
                <i class="fa-solid fa-envelope">  daveangelofdeath@gmail.com  - </i>

                <i class="fa-brands fa-whatsapp"> 3133399549  - </i>

                <i href="" class="fa fa-facebook"> senasoft 2022  </i>
            </div>

            <br>



        <div class="copyrigth">
            <p>© 2022 Senasoft, todos los derechos reservados.Autores Daniel David Albarracin Yepes y Luis Alejandro Pulido Rozo</p>
        </div>

            </footer>
</body>
</html>
