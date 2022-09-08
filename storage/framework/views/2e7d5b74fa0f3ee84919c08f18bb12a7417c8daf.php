<?php $__env->startSection('content'); ?>
<br>
<div class="titulo">
    <h1>BIENVENIDO ESTIMADO CIUDADANO A SONDEOS SENASOFT</h1>
 </div>
 <br>
 <form  action="<?php echo e(route('consultar')); ?>" method="get">
    <div class="contenedorbusqueda">
    <input type="search" class="inputbuscar" placeholder="buscar"  name="buscar">
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
<br>
<br>
<?php $__currentLoopData = $general; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $generals): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>




<div style=" display: grid;
grid-template-columns: repeat(4, 1fr);
grid-gap: 10px; align-items: center; margin:20%; margin-top:0;margin-bottom:0; background-color:beige;" class="card mb-3">
    <img  style="width: 400px;height: 200px; margin-top:20px;" src="https://http2.mlstatic.com/D_NQ_NP_753777-MLM50866844764_072022-V.webp" alt="Card image cap">
    <div class="card-body">
      <h5 style="font-size: 35px" class="card-title"><?php echo e($generals->Tema); ?></h5>
      <p style="font-size: 30px" class="card-text"><?php echo e($generals->Poblacion); ?></p>
      <a href="resondeos" class="btn btn-primary">responder</a>
    </div>
  </div>











    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


 <?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.ciudadanolayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\senasoft2022\resources\views/vistas/inicio.blade.php ENDPATH**/ ?>