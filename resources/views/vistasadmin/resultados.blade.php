@extends('layouts.administradorlayout')

@section('content')
<div class="titulo">


    <h1>RESULTADOS DE LOS SONDEOS</h1>
</div>
<table class="table">

    <thead>
        <tr>
            <th>Pregunta</th>
            <th>Respuesta</th>
            <th>Numero de Documento</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($todosondeos as $respuesta)
        <tr>
            <td>{{$respuesta->Pregunta}}</td>
            <td>{{$respuesta->Respuesta}}</td>
            <td>{{$respuesta->NumeroDocumento}}</td>
        </tr>
        @endforeach
    </tbody>

</table>



@endsection('')
