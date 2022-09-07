<?php
$sesionadmin=session('sesionadmin');
if (!isset($sesionadmin)){
    echo "<script>alert('Tiene que iniciar sesion');window.location = 'loginadmin'</script>";
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
<h1>ADMINISTRADOR  <?php echo "{$sesionadmin}"; ?></h1>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\senasoft2022\resources\views/x.blade.php ENDPATH**/ ?>