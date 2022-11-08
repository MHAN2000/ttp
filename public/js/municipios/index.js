let dt_municipios = undefined
$(document).ready(function () {
    dt_municipios = $('#tabla_municipios').DataTable({
        ajax: {
            url: "tabla_municipios",
            type: "get"
        },
        columns: [
            {
                data: "nombre",
            },
            {
                data: null,
                render: (data) => `
            <a class="btn btn-sm btn-blue " href=${route('municipios.show', data.id)}><i class="fa fa-fw fa-eye"></i> Show</a>
            <a class="btn btn-sm btn-success" href=${route('municipios.edit', data.id)}><i class="fa fa-fw fa-edit"></i> Edit</a>
           
            <button type="submit" class="btn btn-danger btn-sm" onclick="delete_municipio(${data.id})"><i class="fa fa-fw fa-trash"></i> Delete</button>`,
            },
        ],
    });
});

const delete_municipio = async (id) => {
    const url = route("municipios.destroy", id);
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
        dt_municipios.ajax.reload();
    } else {
        Swal.fire({
            title: "Error!",
            text: "No se pudo eliminar el registro.",
            icon: "error"
        });
    }
}