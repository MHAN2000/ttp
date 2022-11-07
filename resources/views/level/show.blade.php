@extends('layouts.app')

@section('template_title')
    {{ $level->name ?? 'Show Level' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
    
                            <span id="card_title">
                                {{ __('Mostrar nivel') }}
                            </span>
    
                            <div class="float-right">
                                <a class="btn btn-blue btn-sm" href="{{ route('levels.index') }}"> Regresar</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $level->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
