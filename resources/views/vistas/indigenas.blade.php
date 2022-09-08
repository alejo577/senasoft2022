@extends('layouts.ciudadanolayout')

@section('content')
<br>
<div class="titulo">
    <h1>COMUNIDADES INDIGENAS</h1>
 </div>
<br>

<form  action="{{route('consultar')}}" method="get">
    <div class="contenedorbusqueda">
    <input type="search" class="inputbuscar" placeholder="buscar"  name="buscar">
    <label for=""></label>
    <button type="submit" class="botonbusqueda" >BUSCAR </button>
</div>
</form>

<br>
<br>
<div class="parrafo">
<p> Sin duda alguna las tribus ancestrales son ricas en experiencias y conocimientos sobre el universo y la madre tierra,
    si haces parte de este hermoso grupo poblacional te extendemos una invitacion para responder estos sondeos poblacionales con el fin de conocer  tu opinion</p>
</div>
@foreach ($indigena as $indigenas)


<div style="align-items: center; margin:20%; margin-top:0;margin-bottom:0; background-color:beige;" class="card mb-3">
    <img  style="width: 600px;height: 200px; margin-top:20px;" src="https://http2.mlstatic.com/D_NQ_NP_753777-MLM50866844764_072022-V.webp" alt="Card image cap">
    <div class="card-body">
      <h5 style="font-size: 35px" class="card-title">{{$indigenas->Tema}}</h5>
      <p style="font-size: 30px" class="card-text">{{$indigenas->Poblacion}}</p>
      <a href="#" class="btn btn-primary">responder</a>
    </div>
  </div>
    @endforeach

 @endsection('')



