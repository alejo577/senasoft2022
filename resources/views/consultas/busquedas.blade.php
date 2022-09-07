@extends('layouts.ciudadanolayout')

@section('content')
<br>
<div class="titulo">
    <h1>RESULTADOS DE BUSQUEDA</h1>
 </div>
<br>
<br>
<br>



@foreach ( $busquedasondeo as $busquedasondeos )

<h5 class="card-title">{{$busquedasondeos->Tema}}</h5>

@endforeach
@endsection



