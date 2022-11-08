@extends('layouts.app')
@section('content')
    <div class="d-md-flex flex-md-row mb-md-3 row">
        <div class="col-md-6">
            <a href="#">
                <div class="card mb-3 rounded-5">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center align-items-center mt-4 mt-md-0">
                            <i class="fas fa-file-signature fa-3x" style="color: #387686"></i>

                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Registros</h5>
                                <p class="card-text">Alta, baja, edición y búsqueda de registros.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        {{-- <div class="col-md-2">

        </div> --}}

        <div class="col-md-6">
            <a href="#">
                <div class="card mb-3 rounded-5">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center align-items-center mt-4 mt-md-0">
                            <i class="fas fa-search-location fa-3x" style="color: #387686"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Municipios</h5>
                                <p class="card-text">Alta, baja, edición y búsqueda de municipios.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <div class="col-md-6">
            <a href="#">
                <div class="card mb-3 rounded-5">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center align-items-center mt-4 mt-md-0 mt-4 mt-md-0">
                            <i class="fas fa-level-up-alt fa-3x" style="color: #387686"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Niveles</h5>
                                <p class="card-text">Alta, baja, edición y búsqueda de niveles.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <div class="col-md-6">
            <a href="#">
                <div class="card mb-3 rounded-5">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center align-items-center mt-4 mt-md-0">
                            <i class="fas fa-envelope-open-text fa-3x" style="color: #387686"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Asuntos</h5>
                                <p class="card-text">Alta, baja, edición y búsqueda de asuntos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>


    </div>
@endsection
