@extends('layouts.app')

@section('title')
    {{ $record->name ?? 'Mostrar registro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
    
                            <span id="card_title">
                                {{ __('Mostrar registro') }}
                            </span>
    
                            <div class="float-right">
                                <a class="btn btn-blue btn-sm" href="{{ route('records.index') }}"> Regresar</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Realiza:</strong>
                            {{ $record->nombre_realiza }}
                        </div>
                        <div class="form-group">
                            <strong>Curp:</strong>
                            {{ $record->curp }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $record->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Paterno:</strong>
                            {{ $record->paterno }}
                        </div>
                        <div class="form-group">
                            <strong>Materno:</strong>
                            {{ $record->materno }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $record->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $record->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $record->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Estatus:</strong>
                            {{ $record->estatus }}
                        </div>
                        <div class="form-group">
                            <strong>Turno:</strong>
                            {{ $record->turno }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel:</strong>
                            {{ $record->nivel->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $record->municipio->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Asunto:</strong>
                            {{ $record->asunto->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
