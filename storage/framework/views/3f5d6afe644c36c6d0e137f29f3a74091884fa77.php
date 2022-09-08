<?php $__env->startSection('content'); ?>
<br>
<div class="titulo">
    <h1>RESULTADOS DE BUSQUEDA</h1>
 </div>
<br>
<br>
<br>





<?php $__currentLoopData = $busqueda; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $busquedas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


<div style="display: grid;
grid-template-columns: repeat(3, 1fr);
grid-gap: 10px; align-items: center; margin:20%; margin-top:0;margin-bottom:0; background-color:beige;" class="card mb-3">
    <img  style="width: 400px;height: 200px; margin-top:20px;" src="https://http2.mlstatic.com/D_NQ_NP_753777-MLM50866844764_072022-V.webp" alt="Card image cap">
    <div class="card-body">
      <h5 style="font-size: 35px" class="card-title"><?php echo e($busquedas->Tema); ?></h5>
      <p style="font-size: 30px" class="card-text"><?php echo e($busquedas->Poblacion); ?></p>
      <a href="resondeos" class="btn btn-primary">responder</a>
    </div>
  </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>






  <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.ciudadanolayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\senasoft2022\resources\views/consultas/busquedas.blade.php ENDPATH**/ ?>