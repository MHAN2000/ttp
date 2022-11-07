let dt_subjects = undefined
$(document).ready(function () {
    dt_subjects = $('#tabla_asuntos').DataTable({
        ajax: {
            url: "tabla_subjects",
            type: "get"
        },
        columns: [
            {
                data: "nombre",
            },
            {
                data: null,
                render: (data) => `
            <a class="btn btn-sm btn-blue " href=${route('subjects.show', data.id)}><i class="fa fa-fw fa-eye"></i> Show</a>
            <a class="btn btn-sm btn-success" href=${route('subjects.edit', data.id)}><i class="fa fa-fw fa-edit"></i> Edit</a>
           
            <button type="submit" class="btn btn-danger btn-sm" onclick="delete_subject(${data.id})"><i class="fa fa-fw fa-trash"></i> Delete</button>`,
            },
        ],
    });
});

const delete_subject = async (id) => {
    const url = route("subjects.destroy", id);
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
        dt_subjects.ajax.reload();
    } else {
        Swal.fire({
            title: "Error!",
            text: "No se pudo eliminar el registro.",
            icon: "error"
        });
    }
}