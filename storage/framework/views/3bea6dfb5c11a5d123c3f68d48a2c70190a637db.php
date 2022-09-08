<?php $__env->startSection('content'); ?>
<br>
<div class="titulo">
    <h1>COMUNIDADES LGBTIQ+</h1>
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
    <p> El grupo lgbti se caracteriza por su gran diversidad cultural, el amor a la vida y el projimo, te extendemos una invitacion para responder estos sondeos poblacionales con el fin de conocer  tu opinion</p>
    </div>
<br>
<br>

<?php $__currentLoopData = $lgbt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lgbts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


<div style="display: grid;
grid-template-columns: repeat(3, 1fr);
grid-gap: 10px; align-items: center; margin:20%; margin-top:0;margin-bottom:0; background-color:beige;" class="card mb-3">
    <img  style="width: 400px;height: 200px; margin-top:20px;" src="https://http2.mlstatic.com/D_NQ_NP_753777-MLM50866844764_072022-V.webp" alt="Card image cap">
    <div class="card-body">
      <h5 style="font-size: 35px" class="card-title"><?php echo e($lgbts->Tema); ?></h5>
      <p style="font-size: 30px" class="card-text"><?php echo e($lgbts->Poblacion); ?></p>
      <a href="resondeos" class="btn btn-primary">responder</a>
    </div>
  </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.ciudadanolayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\senasoft2022\resources\views/vistas/lgbt.blade.php ENDPATH**/ ?>