async function registrar_personas() {
    let nro_identidad = document.getElementById('nro_identidad').value;
    let razon_social = document.querySelector('#razon_social').value;
    let telefono = document.querySelector('#telefono').value;
    let departamento = document.querySelector('#departamento').value;
    let provincia = document.querySelector('#provincia').value;
    let distrito = document.querySelector('#distrito').value;
    let cod_postal = document.querySelector('#cod_postal').value;
    let direccion = document.querySelector('#direccion').value;
    let rol = document.querySelector('#rol').value;
    let correo = document.querySelector('#correo').value;
    let password = document.querySelector('#nro_identidad').value;
    let estado = document.querySelector('#estado').value;
    //Estamos validando que no se envien campos vacios
    if (nro_identidad == "" || razon_social == "" || telefono == "" || departamento == "" || provincia == "" || distrito == "" || cod_postal == "" || direccion == ""|| rol == ""|| correo == ""|| password == ""|| estado == "") {
        alert("Error. Campos vacíos");
        return;
    }

    try {
        //Capturamos datos del html
        //Estamos creando un formulario
        const datos = new FormData(formil);
        //Enviar datos hacia el controlador
        //
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=registrar', {
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

async function listar_personas() {
    try {
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option disabled selected>Seleccione un proveedor</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.razon_social + '</option>';
            });
            document.getElementById('id_persona').innerHTML = contenido_select;
            //Trabaja con jquery
            /*let datos = json.contenido;
            datos.forEach(element => {
                $('#categoria').append($('<option />',{
                    text: `${element.nombre}`,
                    value: `${element.id}`
                }));
            });*/
        }

        console.log(respuesta);
    } catch (error) {
        console.log("Error al cargar clientes" + error);
    }
}