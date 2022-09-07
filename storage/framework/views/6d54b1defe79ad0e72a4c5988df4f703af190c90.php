<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loginadm</title>
    <link rel="stylesheet" href="/senasoft2022/resources/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="reg">
        <h1>Iniciar Sesion Admin</h1>
        <form action="<?php echo e(route('lgadmin')); ?>" method="post">
            <?php echo csrf_field(); ?>
<br>
            <div>
                <label for="usu">Usuario</label>
                <input type="text" name="usu" id="usu">

            </div>
<br>
            <div>
                <label for="pass">Contraseña</label>
                <input type="password" name="pass" id="pass">
            </div>
<br>

            <button type="submit" class="btn btn-primary">Iniciar sesion</button>
            <a href="<?php echo e(route('registroadmin')); ?>" class="btn btn-danger">Registrarse</a>
            <br>
            <a href="<?php echo e(route('elije')); ?>" style="color: white">volver</a>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\senasoft2022\resources\views/loginadmin.blade.php ENDPATH**/ ?>