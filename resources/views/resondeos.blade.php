@extends('layouts.ciudadanolayout')
<?php
$sesionusuario=session('sesionusuario');
if (!isset($sesionusuario)){
    echo "<script>alert('Tiene que iniciar sesion');window.location = 'login'</script>";
}
?>
@section('content')
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
        <h1>Resgistrar Respuesta Sondeo</h1>
        <form action="{{route('res')}}" method="post">
            @csrf
<br>
            <div>
                <label for="doc">DOCUMENTO</label>
                <input type="number" name="doc" id="doc" required class="form-control form-control-sm" style="margin-left:30px;:margin-rigth:30px;width:auto;margin:auto;">

            </div>
<br>
            <label for="pregunta">PREGUNTA</label>
            <select name="pregunta" class="form-control form-control-sm" style="margin-left:30px;:margin-rigth:30px;width:auto;margin:auto;">
                @foreach ($todosondeos as $todo)
                    <option value="{{$todo->Pregunta}}">{{$todo->Pregunta}}</option>
                @endforeach
            </select>

<br>
            <div>
                <label for="respuesta">RESPUESTA</label>
                <input type="text" name="respuesta" id="pass" class="form-control form-control-sm" style="margin-left:30px;:margin-rigth:30px;width:auto;margin:auto;">
            </div>

<br>

            <button type="submit" class="btn btn-success">Enviar sondeo</button>
            <a href="{{route('index')}}" style="color: white">volver</a>
        </form>
    </div>
</body>
</html>
@endsection
