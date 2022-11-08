<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_realiza') }}
            {{ Form::text('nombre_realiza', $record->nombre_realiza, ['class' => 'form-control' . ($errors->has('nombre_realiza') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Realiza']) }}
            {!! $errors->first('nombre_realiza', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('curp') }}
            {{ Form::text('curp', $record->curp, ['class' => 'form-control' . ($errors->has('curp') ? ' is-invalid' : ''), 'placeholder' => 'Curp']) }}
            {!! $errors->first('curp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $record->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('paterno') }}
            {{ Form::text('paterno', $record->paterno, ['class' => 'form-control' . ($errors->has('paterno') ? ' is-invalid' : ''), 'placeholder' => 'Paterno']) }}
            {!! $errors->first('paterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('materno') }}
            {{ Form::text('materno', $record->materno, ['class' => 'form-control' . ($errors->has('materno') ? ' is-invalid' : ''), 'placeholder' => 'Materno']) }}
            {!! $errors->first('materno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $record->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('celular') }}
            {{ Form::text('celular', $record->celular, ['class' => 'form-control' . ($errors->has('celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('celular', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('correo', $record->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_nivel') }}
            {{ Form::text('id_nivel', $record->id_nivel, ['class' => 'form-control' . ($errors->has('id_nivel') ? ' is-invalid' : ''), 'placeholder' => 'Id Nivel']) }}
            {!! $errors->first('id_nivel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_municipio') }}
            {{ Form::text('id_municipio', $record->id_municipio, ['class' => 'form-control' . ($errors->has('id_municipio') ? ' is-invalid' : ''), 'placeholder' => 'Id Municipio']) }}
            {!! $errors->first('id_municipio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_asunto') }}
            {{ Form::text('id_asunto', $record->id_asunto, ['class' => 'form-control' . ($errors->has('id_asunto') ? ' is-invalid' : ''), 'placeholder' => 'Id Asunto']) }}
            {!! $errors->first('id_asunto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-blue mt-3">Submit</button>
    </div>
</div>