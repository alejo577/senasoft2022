@extends('layouts.ciudadanolayout')

@section('content')
<br>
<div class="titulo">
    <h1>COMUNIDADES LGBTIQ+</h1>
 </div>

<br>
<form  action="{{route('consultar')}}" method="get">
    <div class="contenedorbusqueda">
    <input type="search" class="inputbuscar" placeholder="buscar"  name="consultar">
    <label for=""></label>
    <button type="submit" class="botonbusqueda" >BUSCAR </button>
</div>
</form>

<br>
<br>
<div class="parrafo">
<p> Si eres parte de esta  gran comunidad pobacional  te extendemos una invitacion para responder estos sondeos poblacionales con el fin de conocer  tu opinion</p>
</div>
<div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Comunidades urbanas</h5>
          <img src="https://http2.mlstatic.com/D_NQ_NP_753777-MLM50866844764_072022-V.webp" alt="">
          <p class="card-text">foro diriguido a la poblacion urbana de soacha</p>
          <a href="#" class="btn btn-primary">responder</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Comunidades urbanas</h5>
            <img style="align-content: center" src="https://http2.mlstatic.com/D_NQ_NP_753777-MLM50866844764_072022-V.webp" alt="">
            <p class="card-text">foro diriguido a la poblacion urbana de soacha</p>
            <a href="#" class="btn btn-primary">responder</a>
          </div>
        </div>
      </div>


  </div>
 @endsection('')



