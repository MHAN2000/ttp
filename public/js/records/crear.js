// Variables globales
let modal;
const generar_turno = async () => {
    const url = route("crear_registro_publico");
    const form = document.getElementById("formulario");
    const formData = new FormData(form);
    const init = {
        method: "POST",
        body: formData,
        headers: {
            Accept: "application/json",
            "X-CSRF-TOKEN": $("#csrf").attr("content"),
        }
    }
    const req = await fetch(url, init);
    if (req.ok) {
        const { id } = await req.json();
        window.open(route('export_pdf', id), '_blank').focus();
        Swal.fire({
            title: "Good job!",
            text: "Registro creado.",
            icon: "success"
        });
        dt_records.ajax.reload();
        // Generar pdf
    } else {
        Swal.fire({
            title: "Error!",
            text: "No se pudo crear el registro.",
            icon: "error"
        });
    }
}

const editar_turno = async (id) => {
    const url = route('updatePublic', id);
    const form = document.getElementById('formulario');
    const formData = new FormData(form);

    const init = {
        method: 'PUT',
        body: JSON.stringify(Object.fromEntries(formData)),
        headers: {
            'X-CSRF-TOKEN': $('#csrf').attr('content'),
            Accept: 'application/json',
            'Content-Type': 'application/json'
        }
    }

    const req = await fetch(url, init);
    if (req.ok) {
        Swal.fire({
            icon: 'success',
            title: 'Good job!',
            text: 'Se ha guardado con exito'
        });
        return;
    }

    Swal.fire({
        icon: 'error',
        title: 'Error...',
        text: 'Se ha producido un error'
    });
}

const buscarModal = () => {
    modal = new bootstrap.Modal(document.getElementById('modal'));
    // Mostrar el modal
    modal.toggle();
    // Establecer body
    document.getElementById('modalBody').innerHTML = `
    <div class="row">
        <div class="col-12">
            <label>CURP o Turno a buscar:</label>
            <input class="form-control" id="curpTurnoModal" name="curpTurno">
        </div>
    </div>
    <div class="row mb-3">
            <div class="col-12">
                <button type="button" class="btn btn-blue mt-3" onclick="completarFormulario()">Buscar turno</button>
            </div>
        </div>
    `
}

const completarFormulario = async () => {
    const curpModalElemento = document.getElementById('curpTurnoModal').value;
    const url = route('encontrarCURP', curpModalElemento);
    const init = {
        method: 'GET',
        headers: {
            'X-CSRF-TOKEN': $('#csrf').attr('content'),
            Accept: 'application/json'
        }
    }
    const req = await fetch(url, init);
    if (req.ok) {
        const res = await req.json();
        // Se ha encontrado un registro con esa curp
        document.getElementById('nombre_realiza').value = res.nombre_realiza;
        document.getElementById('curp').value = res.curp;
        document.getElementById('nombre').value = res.nombre;
        document.getElementById('paterno').value = res.paterno;
        document.getElementById('materno').value = res.materno;
        document.getElementById('telefono').value = res.telefono;
        document.getElementById('celular').value = res.celular;
        document.getElementById('correo').value = res.correo;
        document.getElementById('id_nivel').value = res.id_nivel;
        document.getElementById('id_municipio').value = res.id_municipio;
        document.getElementById('id_asunto').value = res.id_asunto;

        Swal.fire({
            icon: 'success',
            title: 'Good job!',
            text: 'El registro se ha encontrado'
        });

        modal.toggle();

        return;
    }

    Swal.fire({
        icon: 'error',
        title: 'Error...',
        text: 'El registro no se ha encontrado'
    });
}