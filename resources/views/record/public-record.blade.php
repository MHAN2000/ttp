@extends('base')

@section('title')
    Ticket de turno
@endsection

@section('body')
    <section class="content container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header d-flex gap-3 align-items-center">
                        <img src="{{ asset('img/logo_se.png') }}" alt="" width="5%" class="rounded-3">
                        <span class="card-title" style="margin: 0px">
                            <h3 style="margin: 0px">Ticket de turno</h3>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-12">
                                <button type="button" class="btn btn-blue mt-3" onclick="buscarModal()">Buscar
                                    turno</button>
                            </div>
                        </div>
                        @include('record.public-form')
                    </div>

                    <div class="row mb-3">
                        <div class="col-12 d-flex justify-content-end mt-3">
                            <button type="button" class="btn btn-blue mt-3" onclick="generar_turno()">Generar
                                turno</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ @asset('js/records/crear.js') }}"></script>
@endpush
