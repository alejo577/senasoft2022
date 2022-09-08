<?php $__env->startSection('template_title'); ?>
    Sondeo
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Sondeo')); ?>

                            </span>

                             <div class="float-right">
                                <a href="<?php echo e(route('sondeos.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Create New')); ?>

                                </a>
                              </div>
                        </div>
                    </div>
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Tema</th>
										<th>Pregunta</th>
										<th>Poblacion</th>
										<th>Imagen</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $sondeos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sondeo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>

											<td><?php echo e($sondeo->Tema); ?></td>
											<td><?php echo e($sondeo->Pregunta); ?></td>
											<td><?php echo e($sondeo->Poblacion); ?></td>
											<td><?php echo e($sondeo->Imagen); ?></td>

                                            <td>
                                                <form action="<?php echo e(route('sondeos.destroy',$sondeo->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="<?php echo e(route('sondeos.show',$sondeo->id)); ?>"><i class="fa fa-fw fa-eye"></i>Detalles</a>
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('sondeos.edit',$sondeo->id)); ?>"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                    <?php echo csrf_field(); ?>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo $sondeos->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.administradorlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\senasoft2022\resources\views/sondeo/index.blade.php ENDPATH**/ ?>