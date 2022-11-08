let dt_records = undefined
$(document).ready(function () {
    dt_records = $('#tabla_registros').DataTable({
        ajax: {
            url: "tabla_records",
            type: "get"
        },
        columns: [
            {
                data: "nombre_realiza",
            },
            {
                data: "curp",
            },
            {
                data: "nombre",
            },
            {
                data: "paterno",
            },
            {
                data: "materno",
            },
            {
                data: "telefono",
            },
            {
                data: "celular",
            },
            {
                data: "correo",
            },
            {
                data: "estatus",
            },
            {
                data: "turno",
            },
            {
                data: "nivel.nombre",
            },
            {
                data: "municipio.nombre",
            },
            {
                data: "asunto.nombre",
            },
            {
                data: null,
                render: (data) => `
            <div class="gap-2 d-flex">
            <a href=${route('records.show', data.id)}><i class="fa fa-fw fa-eye"></i> </a>
            <a  href=${route('records.edit', data.id)}><i class="fa fa-fw fa-edit"></i> </a>
           
            <a type="submit" onclick="delete_record(${data.id})"><i class="fa fa-fw fa-trash"></i> </a></div>`,
            },
        ],
    });
});

const delete_record = async (id) => {
    const url = route("records.destroy", id);
    const init ={
        method: "DELETE",
        headers: {
            Accept: "applications/json",
            "X-CSRF-TOKEN": $("#csrf").attr("content"),
        }
    }
    const req = await fetch (url,init);
    if (req.ok) {
        Swal.fire({
            title: "Good job!",
            text: "Registro borrado.",
            icon: "success"
        });
        dt_records.ajax.reload();
    } else {
        Swal.fire({
            title: "Error!",
            text: "No se pudo eliminar el registro.",
            icon: "error"
        });
    }
}