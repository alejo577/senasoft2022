<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/senasoft2022/resources/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="reg">
        <h1>Iniciar Sesion Usuario</h1>
        <form action="{{route('lg')}}" method="post">
            @csrf
<br>
            <div>
                <label for="email">Correo</label>
                <input type="text" name="email" id="email">

            </div>
<br>
            <div>
                <label for="pass">Contraseña</label>
                <input type="password" name="pass" id="pass">
            </div>
<br>

            <button type="submit" class="btn btn-primary">Iniciar sesion</button>
            <a href="{{route('registro')}}" class="btn btn-danger">Registrarse</a>
        </form>
    </div>
</body>
</html>
