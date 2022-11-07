let dt_levels = undefined
$(document).ready(function () {
    dt_levels = $('#tabla_niveles').DataTable({
        ajax: {
            url: "tabla_levels",
            type: "get"
        },
        columns: [
            {
                data: "nombre",
            },
            {
                data: null,
                render: (data) => `
            <a class="btn btn-sm btn-blue " href=${route('levels.show', data.id)}><i class="fa fa-fw fa-eye"></i> Show</a>
            <a class="btn btn-sm btn-success" href=${route('levels.edit', data.id)}><i class="fa fa-fw fa-edit"></i> Edit</a>
           
            <button type="submit" class="btn btn-danger btn-sm" onclick="delete_level(${data.id})"><i class="fa fa-fw fa-trash"></i> Delete</button>`,
            },
        ],
    });
});

const delete_level = async (id) => {
    const url = route("levels.destroy", id);
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
        dt_levels.ajax.reload();
    } else {
        Swal.fire({
            title: "Error!",
            text: "No se pudo eliminar el registro.",
            icon: "error"
        });
    }
}