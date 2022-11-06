@extends('base')
@section('title', 'Inicia sesión')
@section('body')
    <div class="row h-100 d-flex justify-content-center align-items-center flex-column">
        <div class="col-12 d-flex align-items-center flex-column">
            <label for="">Usuario</label>
            <input type="text" class="w-25 form-control" name="email">
            <label for="">Contraseña</label>
            <input type="text" class="w-25 form-control" name="password">
        </div>
    </div>
@endsection