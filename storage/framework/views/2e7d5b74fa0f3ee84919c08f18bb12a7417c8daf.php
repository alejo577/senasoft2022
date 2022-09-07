<?php $__env->startSection('content'); ?>
<br>
<div class="titulo">
    <h1>BIENVENIDO ESTIMADO CIUDADANO A SONDEOS SENASOFT</h1>
 </div>
 <br>
 <form  action="<?php echo e(route('consultar')); ?>" method="get">
    <div class="contenedorbusqueda">
    <input type="search" class="inputbuscar" placeholder="buscar"  name="consultar">
    <label for=""></label>
    <button type="submit" class="botonbusqueda" >BUSCAR </button>
</div>
</form>
<br>
<br>
<div class="parrafo">
    <p>
        Bienvenido estimad@ usuari@ para nosotros es muy importante conocer tu opinion de lo que respecta tu vida diaria, esta plataforma esta diseñada para que repondas unos sondeos que van acordes a tu estilo de vida y tu comunidad, animate a responder.
        </p>
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
 <?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.ciudadanolayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\senasoft2022\resources\views/vistas/inicio.blade.php ENDPATH**/ ?>