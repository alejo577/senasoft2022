@extends('layouts.ciudadanolayout')

@section('content')


<br>
<div class="titulo">
   <h1>COMUNIDADES URBANAS</h1>
</div>
<br>

<form  action="{{route('consultar')}}" method="get">
    <div class="contenedorbusqueda">
    <input type="search" class="inputbuscar" placeholder="buscar"  name="buscar">
    <label for=""></label>
    <button type="submit" class="botonbusqueda" >BUSCAR </button>
<br>
<br>
<div class="parrafo">
    <p> El grupo poblacional urbano cada dia crece de manera exponencial en todo lugar, esto conlleva a mas opiniones, puntos de vista, problemas etc... te extendemos una invitacion para responder estos sondeos poblacionales con el fin de conocer  tu opinion</p>
    </div>

    <br>
    <br>
    @foreach ($urbana as $urbanas)


    <div style="display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px; align-items: center; margin:20%; margin-top:0;margin-bottom:0; background-color:beige;" class="card mb-3">
        <img  style="width: 400px;height: 200px; margin-top:20px;" src="https://http2.mlstatic.com/D_NQ_NP_753777-MLM50866844764_072022-V.webp" alt="Card image cap">
        <div class="card-body">
          <h5 style="font-size: 35px" class="card-title">{{$urbanas->Tema}}</h5>
          <p style="font-size: 30px" class="card-text">{{$urbanas->Poblacion}}</p>
          <a href="#" class="btn btn-primary">responder</a>
        </div>
      </div>
    @endforeach



 @endsection('')



