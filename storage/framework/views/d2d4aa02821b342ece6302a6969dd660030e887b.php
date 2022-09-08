<?php $__env->startSection('content'); ?>
<div class="titulo">


    <h1>RESULTADOS DE LOS SONDEOS</h1>
</div>
<table class="table">

    <thead>
        <tr>
            <th>Pregunta</th>
            <th>Respuesta</th>
            <th>Numero de Documento</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $todosondeos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $respuesta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($respuesta->Pregunta); ?></td>
            <td><?php echo e($respuesta->Respuesta); ?></td>
            <td><?php echo e($respuesta->NumeroDocumento); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>

</table>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.administradorlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\senasoft2022\resources\views/vistasadmin/resultados.blade.php ENDPATH**/ ?>