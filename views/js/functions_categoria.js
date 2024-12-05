async function registrar_categorias() {
    let nombre = document.getElementById('nombre').value;
    let detalle = document.querySelector('#detalle').value;
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

async function listar_categoria_lista() {
    try {
        let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=listar');
        let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let cont = 0;
            datos.forEach(item => {
                let nueva_fila = document.createElement("tr");
                //id de la fila      id de la base de datos.
                nueva_fila.id = "fila" + item.id;
                cont++;
                //lo que va al lado del item. deben ser los campos de la base de datos
                nueva_fila.innerHTML = `
                        <th>${cont}</th>
                        <td>${item.nombre}</td>
                        <td>${item.detalle}</td>
                        <td>${item.options}</td>
                `; document.querySelector('#tbl_categoria').appendChild(nueva_fila)
            });
        }

    } catch (error) {
        console.log("Error al cargar las compras" + error);
    }
}
if (document.querySelector('#tbl_categoria')) {
    listar_categoria_lista();
}