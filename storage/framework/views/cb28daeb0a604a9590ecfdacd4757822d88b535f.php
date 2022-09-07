
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/senasoft2022/resources/css/estilos.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/e3aa94006d.js" crossorigin="anonymous"></script>
    <title>hola- <?php echo $__env->yieldContent('inicio'); ?></title>

</head>

<body>


    <div class="navegador">
        <ul>
        <li class="li"><a class="a" href="<?php echo e(route('index')); ?>">INICIO</a></li>
        <li class="li"><a class="a" href="<?php echo e(route('afro')); ?>">COMUNIDADES AFRO</a></li>
        <li class="li"><a  class="a" href="<?php echo e(route('lgbt')); ?>">COMUNIDADES LGBTI</a></li>
        <li class="li"><a class="a" href="<?php echo e(route('indigenas')); ?>">COMUNIDADES INDIGENAS</a></li>
        <li class="li"><a class="a" href="<?php echo e(route('urbanas')); ?>">COMUNIDADES URBANAS</a></li>
        <li class="li"><a class="a" href="#">INICIAR SESION</a></li>
        <li class="li"><a class="a" href="">REGISTRATE</a></li>

    </ul>
        </div>

       <form class="buscar" action="">


<br>
<br>
<form  action="<?php echo e(route('consultar')); ?>" method="get">
    <div class="contenedorbusqueda">
    <input type="search" class="inputbuscar" placeholder="buscar" type="text" name="consultar">
    <label for=""></label>
    <button type="submit" class="botonbusqueda" >BUSCAR </button>
</div>
</form>



       </form>


       <?php echo $__env->yieldContent('content'); ?>

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
    <p>© 2022 Senasoft, todos los derechos reservados, Daniel David Albarracin Yepes y Luis Alejandro Pulido Rozo</p>
</div>

    </footer>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\senasoft2022\resources\views/layouts/ciudadanolayout.blade.php ENDPATH**/ ?>