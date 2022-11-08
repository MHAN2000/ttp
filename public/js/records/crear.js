const generar_turno = async () =>{
    const url = route("crear_registro_publico");
    const form = document.getElementById("formulario");
    const formData = new FormData(form);
    const init ={
        method: "POST",
        body: formData,
        headers: {
            Accept: "application/json",
            "X-CSRF-TOKEN": $("#csrf").attr("content"),
        }
    }
    const req = await fetch (url,init);
    if (req.ok) {
        Swal.fire({
            title: "Good job!",
            text: "Registro creado.",
            icon: "success"
        });
        dt_records.ajax.reload();
    } else {
        Swal.fire({
            title: "Error!",
            text: "No se pudo crear el registro.",
            icon: "error"
        });
    }
}