<?php $__env->startSection('content'); ?>
<br>
<div class="titulo">
    <h1>RESULTADOS DE BUSQUEDA</h1>
 </div>
<br>
<br>
<br>



<?php $__currentLoopData = $consultas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consulta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


<div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php echo e($consultas->Temas); ?></h5>
          <img src="https://http2.mlstatic.com/D_NQ_NP_753777-MLM50866844764_072022-V.webp" alt="">
          <p class="card-text"><?php echo e($consultas->Pregunta); ?></p>
          <p class="card-text"><?php echo e($consultas->Poblacion); ?></p>
          <a href="#" class="btn btn-primary">responder</a>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 <?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.ciudadanolayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\senasoft2022\resources\views/consultas/busquedas.blade.php ENDPATH**/ ?>