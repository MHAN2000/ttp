@extends('base')
@section('title', 'Inicia sesión')
@section('body')
    <form id="inicio_sesion_form" class="row h-100 d-flex justify-content-center align-items-center flex-column"
        onsubmit="login(this)">
        <div class="col-12 d-flex align-items-center flex-column">
            <label for="">Usuario</label>
            <input type="text" class="w-25 form-control" name="email">
            <label for="">Contraseña</label>
            <input type="password" class="w-25 form-control" name="password">
            <button type="button" onclick="login(this)" class="btn-success">Ingresar</button>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        const login = async () => {
            // URL para iniciar sesion POST
            const url = route('usuario_sesion');
            // Obtener formulario y convertirlo a FormData
            const formulario = document.getElementById('inicio_sesion_form');
            const formData = new FormData(formulario);
            // Establecer metodo y encabezados
            const init = {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': $('#csrf').attr('content'),
                    Accept: 'application/json'
                }
            }
            // Mandar peticion al back
            const req = await fetch(url, init);
            // Checar si la respuesta es un 200
            if (req.ok) {
                window.location.href = route('inicio');
                return;
            }

            Swal.fire('Error');
        }
    </script>
@endpush
