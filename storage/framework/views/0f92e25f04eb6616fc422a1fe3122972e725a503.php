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

                    </div>
                </div>
            </div>
        </div>
    </section>


<?php echo $__env->make('layouts.appx', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\senasoft2022\resources\views/sondeo/show.blade.php ENDPATH**/ ?>