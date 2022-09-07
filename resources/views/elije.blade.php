@extends('layouts.ciudadanolayout')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/senasoft2022/resources/css/app.css">
    <link rel="stylesheet" href="/senasoft2022/resources/css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="pregunta" style="padding: 30px">
        <h1>Como desea ingresar</h1>

        <a href="{{route('login')}}" class="btn btn-success">Usuario</a>
        <label for="">|</label>
        <a href="{{route('loginadmin')}}" class="btn btn-warning">Administrador</a>
<br>
        <a href="{{route('index')}}" style="color: white">volver</a>

    </div>
</body>
</html>
@endsection
