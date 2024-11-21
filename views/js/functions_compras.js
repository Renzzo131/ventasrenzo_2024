async function registrar_compras() {
    let id_producto = document.getElementById('id_producto').value;
    let cantidad = document.querySelector('#cantidad').value;
    let precio = document.querySelector('#precio').value;
    let fecha_compra = document.querySelector('#fecha_compra').value;
    let id_persona = document.querySelector('#id_persona').value;
    //Estamos validando que no se envien campos vacios
    if (id_producto == "" || cantidad == ""|| precio == ""|| fecha_compra == ""|| id_persona == "") {
        alert("Error. Campos vacíos");
        return;
    }

    try {
        //Capturamos datos del html
        //Estamos creando un formulario
        const datos = new FormData(document.getElementById('formil'));
        //Enviar datos hacia el controlador
        //
        let respuesta = await fetch(base_url + 'controller/Compras.php?tipo=registrar', {
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


/* async function listar_producto() {
    try {
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option disabled selected>Seleccione un producto</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.nombre + '</option>';
            });
            document.getElementById('id_producto').innerHTML = contenido_select; */
            //Trabaja con jquery
            /*let datos = json.contenido;
            datos.forEach(element => {
                $('#categoria').append($('<option />',{
                    text: `${element.nombre}`,
                    value: `${element.id}`
                }));
            });*/
/*         }

        console.log(respuesta);
    } catch (error) {
        console.log("Error al cargar categorias" + error);
    }
} */