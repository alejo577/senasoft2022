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

<form action="{{route('busqueda2')}}" method="get">
    <input type="text" name="buscar" id="buscar">
    <label for="buscar"></label>
    <button type="submit">buscar</button>
</form>

@foreach ($consulta as $consultas)

<h1>{{$consultas->Tema}}</h1>

@endforeach
</body>
</html>
