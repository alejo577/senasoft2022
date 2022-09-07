<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>busquedas</h1>

<form action="<?php echo e(route('busqueda2')); ?>" method="get">
    <input type="text" name="buscar" id="buscar">
    <label for="buscar"></label>
    <button type="submit">buscar</button>
</form>

<?php $__currentLoopData = $consulta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consultas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<h1><?php echo e($consultas->Tema); ?></h1>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\senasoft2022\resources\views/busqueda2.blade.php ENDPATH**/ ?>