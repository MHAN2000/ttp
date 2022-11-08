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
            {{ Form::number('telefono', $record->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('celular') }}
            {{ Form::number('celular', $record->celular, ['class' => 'form-control' . ($errors->has('celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('celular', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::email('correo', $record->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nivel') }}
            <select name="id_nivel" id="id_nivel" class="form-control">
                <option value="">Selccione uno:</option>
                @foreach ($niveles as $item)
                    @if ($item->id == $record->id_nivel)
                        <option value="{{ $item->id }}" selected>{{ $item->nombre }}</option>
                    @else
                        <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('municipio') }}
            <select name="id_municipio" id="id_municipio" class="form-control">
                <option value="">Selccione uno:</option>
                @foreach ($municipios as $item)
                    @if ($item->id == $record->id_municipio)
                        <option value="{{ $item->id }}" selected>{{ $item->nombre }}</option>
                    @else
                        <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('asunto') }}
            <select name="id_asunto" id="id_asunto" class="form-control">
                <option value="">Selccione uno:</option>
                @foreach ($asuntos as $item)
                    @if ($item->id == $record->id_asunto)
                        <option value="{{ $item->id }}" selected>{{ $item->nombre }}</option>
                    @else
                        <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                    @endif
                @endforeach
            </select>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-blue mt-3">Submit</button>
    </div>
</div>
