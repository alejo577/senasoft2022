<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('Tema')); ?>

            <?php echo e(Form::text('Tema', $sondeo->Tema, ['class' => 'form-control' . ($errors->has('Tema') ? ' is-invalid' : ''), 'placeholder' => 'Tema'])); ?>

            <?php echo $errors->first('Tema', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('Pregunta')); ?>

            <?php echo e(Form::text('Pregunta', $sondeo->Pregunta, ['class' => 'form-control' . ($errors->has('Pregunta') ? ' is-invalid' : ''), 'placeholder' => 'Pregunta'])); ?>

            <?php echo $errors->first('Pregunta', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('Poblacion')); ?>

            <?php echo e(Form::text('Poblacion', $sondeo->Poblacion, ['class' => 'form-control' . ($errors->has('Poblacion') ? ' is-invalid' : ''), 'placeholder' => 'Poblacion'])); ?>

            <?php echo $errors->first('Poblacion', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\senasoft2022\resources\views/sondeo/form.blade.php ENDPATH**/ ?>