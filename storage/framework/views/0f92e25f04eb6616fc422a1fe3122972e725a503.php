

<?php $__env->startSection('template_title'); ?>
    <?php echo e($sondeo->name ?? 'Show Sondeo'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Sondeo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="<?php echo e(route('sondeos.index')); ?>"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tema:</strong>
                            <?php echo e($sondeo->Tema); ?>

                        </div>
                        <div class="form-group">
                            <strong>Pregunta:</strong>
                            <?php echo e($sondeo->Pregunta); ?>

                        </div>
                        <div class="form-group">
                            <strong>Poblacion:</strong>
                            <?php echo e($sondeo->Poblacion); ?>

                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            <?php echo e($sondeo->Imagen); ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\senasoft2022\resources\views/sondeo/show.blade.php ENDPATH**/ ?>