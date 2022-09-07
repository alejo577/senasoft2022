<?php $__env->startSection('content'); ?>
<br>
<div class="titulo">
    <h1>RESULTADOS DE BUSQUEDA</h1>
 </div>
<br>
<br>
<br>



<?php $__currentLoopData = $busquedasondeo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $busquedasondeos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<h5 class="card-title"><?php echo e($busquedasondeos->Tema); ?></h5>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.ciudadanolayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\senasoft2022\resources\views/consultas/busquedas.blade.php ENDPATH**/ ?>