@extends('layouts.ciudadanolayout')

@section('content')
<br>
<div class="titulo">
    <h1>RESULTADOS DE BUSQUEDA</h1>
 </div>
<br>
<br>
<br>



@foreach ( $consultas as $consulta )


<div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{$consultas->Temas}}</h5>
          <img src="https://http2.mlstatic.com/D_NQ_NP_753777-MLM50866844764_072022-V.webp" alt="">
          <p class="card-text">{{$consultas->Pregunta}}</p>
          <p class="card-text">{{$consultas->Poblacion}}</p>
          <a href="#" class="btn btn-primary">responder</a>
        </div>
      </div>
    </div>
  </div>
  @endforeach

 @endsection('')



