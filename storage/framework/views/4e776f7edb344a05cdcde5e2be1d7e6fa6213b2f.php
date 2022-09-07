<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Registro</title>
    <link rel="stylesheet" href="/senasoft2022/resources/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="reg">
        <h1>Registro Admin</h1>
        <form action="<?php echo e(route('regAdm')); ?>" method="post">
            <?php echo csrf_field(); ?>
<br>
            <div>
                <label for="usu">Usuario</label>
                <input type="text" name="usu" id="usu">
                <label for="usu"><?php $__errorArgs = ['usu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="alert alert-danger"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>

            </div>
<br>
            <div>
                <label for="pass">Contraseña</label>
                <input type="password" name="pass" id="pass">
                <label for="pass"><?php $__errorArgs = ['pass'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="alert alert-danger"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>

            </div>
<br>
            <div>
                <label for="cod">Codigo de seguridad</label>
                <input type="text" name="cod" id="cod">
                <label for="cod"><?php $__errorArgs = ['cod'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="alert alert-danger"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>

            </div>
<br>
            <button type="submit" class="btn btn-primary">Registrarse</button>
            <a href="<?php echo e(route('loginadmin')); ?>" class="btn btn-danger">Iniciar sesion</a>
            <br>
            <a href="<?php echo e(route('elije')); ?>" style="color: white">volver</a>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\senasoft2022\resources\views/registroadmin.blade.php ENDPATH**/ ?>