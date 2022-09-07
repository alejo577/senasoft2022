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
        <form action="{{route('regAdm')}}" method="post">
            @csrf
<br>
            <div>
                <label for="usu">Usuario</label>
                <input type="text" name="usu" id="usu">
                <label for="usu">@error('usu')<p class="alert alert-danger">{{ $message }}</p>@enderror</label>

            </div>
<br>
            <div>
                <label for="pass">Contraseña</label>
                <input type="password" name="pass" id="pass">
                <label for="pass">@error('pass')<p class="alert alert-danger">{{ $message }}</p>@enderror</label>

            </div>
<br>
            <div>
                <label for="cod">Codigo de seguridad</label>
                <input type="text" name="cod" id="cod">
                <label for="cod">@error('cod')<p class="alert alert-danger">{{ $message }}</p>@enderror</label>

            </div>
<br>
            <button type="submit" class="btn btn-primary">Registrarse</button>
            <a href="{{route('loginadmin')}}" class="btn btn-danger">Iniciar sesion</a>
            <br>
            <a href="{{route('elije')}}" style="color: white">volver</a>
        </form>
    </div>
</body>
</html>
