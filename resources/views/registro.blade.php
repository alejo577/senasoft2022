@extends('layouts.ciudadanolayout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTRO</title>
    <link rel="stylesheet" href="/senasoft2022/resources/css/app.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <body>

<div class="reg">
<h1>Registro de Usuarios</h1>
    <form action="{{route('reg')}}" method="post">
        @csrf

        <div>
            <label for="TDoc">Tipo de Documento</label>
            <input type="text" name="TDoc">
        </div>
        <br>




        <div>

            <label for="NDoc">Numero de Documento</label>
            <input type="text" name="NDoc">
            <label for="NDoc">@error('NDoc')<p class="alert alert-danger">{{ $message }}</p>@enderror</label>

        </div>
        <br>
        <div>
            <label for="nombre">Nombres</label>
            <input type="text" name="nombre">
        </div>
        <br>
        <div>
            <label for="apellido">Apellidos</label>
            <input type="text" name="apellido">
        </div>
        <br>
        <div>
            <label for="sexo">Sexo</label>
            <input type="text" name="sexo">

        </div>
        <br>
        <div>
            <label for="telcel">Telefono celular</label>
            <input type="text" name="telcel">
        </div>
        <br>
        <div>
            <label for="telfij">Telefono Fijo</label>
            <input type="text" name="telfij">
        </div>

        <br>
        <div>
            <label for="mun">Municipio</label>
            <input type="text" name="mun">
        </div>
        <br>
        <div>
            <label for="dir">Direccion</label>
            <input type="text" name="dir">
        </div>
        <br>
        <div>
            <label for="barrio">Barrio</label>
            <input type="text" name="barrio" value="">
        </div>
        <br>
        <div>
            <label for="email">Correo</label>
            <input type="text" name="email">
        </div>
        <br>
        <div>
            <label for="pass">Contraseña</label>
            <input type="password" name="pass">
        </div>
        <br>













        <div class="socio">
            <h1>Datos Socioeconomicos</h1>

            <div>

                <label for="fecha">Fecha de Nacimiento</label>
                <input type="text" name="fecha">

            </div>
            <br>
            <div>
                <label for="etnia">Etnia</label>
                <input type="text" name="etnia">
            </div>
            <br>
            <div>
                <label for="condiciondiscapacidad">Condicion de Discapacidad</label>
                <input type="text" name="condiciondiscapacidad">
            </div>
            <br>
            <div>
                <label for="estrato">Estrato</label>
                <input type="text" name="estrato">
            </div>
            <br>
            <div>
                <label for="NivEdu">Ultimo Nivel Educativo</label>
                <input type="text" name="NivEdu">
            </div>

            <br>
            <div>
                <label for="accesodisp">¿Tiene Acceso a Dispositivos?</label>
                <input type="text" name="accesodisp">
            </div>
            <br>
            <div>
                <label for="dispositivos">Cuales dispositivos</label>
                <input type="text" name="dispositivos">
            </div>
            <br>
            <div>
                <label for="internet">¿Tiene Conectividad a Internet?</label>
                <input type="text" name="internet">
            </div>
            <br>
            <div>
                <label for="afiliacion">Tipo de Afilicion a Regimen</label>
                <input type="text" name="afiliacion">
            </div>
            <br>

        </div>







        <br>
        <button type="submit" class="btn btn-success">Registrarse</button>
        <br>

        <a href="{{route('login')}}" class="btn btn-danger">Inicie sesion</a>
        <a href="{{route('elije')}}" style="color: white">volver</a>
    </form>
</div>

    </body>

</body>
</html>
@endsection('')
