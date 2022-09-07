<?php
$sesionusuario=session('sesionusuario');
if (!isset($sesionusuario)){
    echo "<script>alert('Tiene que iniciar sesion');window.location = 'login'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>inicio</title>
</head>
<body>
<h1>USUARIO  <?php echo "{$sesionusuario}"; ?></h1>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\senasoft2022\resources\views/l.blade.php ENDPATH**/ ?>