<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Tema') }}
            {{ Form::text('Tema', $sondeo->Tema, ['class' => 'form-control' . ($errors->has('Tema') ? ' is-invalid' : ''), 'placeholder' => 'Tema']) }}
            {!! $errors->first('Tema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pregunta') }}
            {{ Form::text('Pregunta', $sondeo->Pregunta, ['class' => 'form-control' . ($errors->has('Pregunta') ? ' is-invalid' : ''), 'placeholder' => 'Pregunta']) }}
            {!! $errors->first('Pregunta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Poblacion') }}
            {{ Form::text('Poblacion', $sondeo->Poblacion, ['class' => 'form-control' . ($errors->has('Poblacion') ? ' is-invalid' : ''), 'placeholder' => 'Poblacion']) }}
            {!! $errors->first('Poblacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Imagen') }}
            {{ Form::text('Imagen', $sondeo->Imagen, ['class' => 'form-control' . ($errors->has('Imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('Imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>