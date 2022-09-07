
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/senasoft2022/resources/css/estilosadmin.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/e3aa94006d.js" crossorigin="anonymous"></script>
    <title>hola- @yield('inicio')</title>

</head>

<body>


    <div class="navegador">
        <ul>
        <li class="li"><a class="a" href="{{route('indexadmin')}}">INICIO</a></li>
        <li class="li"><a class="a" href="">GENERAR SONDEO</a></li>
        <li class="li"><a  class="a" href="{{route('resultados')}}">RESULTADOS</a></li>
        <li class="li"><a  class="a" href="{{route('estadisticas')}}">ESTADISTICAS</a></li>
        <li class="li"><a  class="a" href="{{route('certificados')}}">CERTIFICADOS</a></a></li>

        <li class="li"><a class="a" href="#">CERRAR SESION</a></li>

    </ul>
        </div>

       <form class="buscar" action="">


<br>
<br>



       @yield('content')

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
