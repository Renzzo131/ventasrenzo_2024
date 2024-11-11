async function registrar_categorias() {
    let codigo = document.getElementById('nombre').value;
    let nombre = document.querySelector('#detalle').value;
    //Estamos validando que no se envien campos vacios
    if (nombre == "" || detalle == "") {
        alert("Error. Campos vacíos");
        return;
    }

    try {
        //Capturamos datos del html
        //Estamos creando un formulario
        const datos = new FormData(formil);
        //Enviar datos hacia el controlador
        //
        let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (json.status) {
            swal("Registro", json.mensaje, "success")
        } else {
            swal("Registro", json.mensaje, "error")
        }
        console.log(json);

    } catch (error) {
        console.log("Oops, ocurrió un error " + error);
    }
    //Los programadores suelen utilizar solo la letra e y no error.
}