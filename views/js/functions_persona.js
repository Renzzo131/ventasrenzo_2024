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
        const datos = new FormData(frmNuevoPersona);
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
                        <td>${item.nro_identidad}</td>
                        <td>${item.razon_social}</td>
                        <td>${item.correo}</td>
                        <td>${item.telefono}</td>
                        <td>${item.departamento}</td>
                        <td>${item.provincia}</td>
                        <td>${item.distrito}</td>
                        <td>${item.direccion}</td>
                        <td>${item.rol}</td>
                        <td>${item.options}</td>
                `; document.querySelector('#tbl_persona').appendChild(nueva_fila)
            });
        }

    } catch (error) {
        console.log("Error al cargar productos" + error);
    }
}
if (document.querySelector('#tbl_persona')) {
    listar_personas();
}



async function ver_persona(id){
    const formData= new FormData();
    //agregale un hijo   creale un nombre y pasale el id
    formData.append('id_persona',id);
    try {
        //respndemos e indicamos hacia donde queremos enviar
        let respuesta = await fetch(base_url+'controller/Persona.php?tipo=ver', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#id_persona').value = json.contenido.id;
            document.querySelector('#nro_identidad').value = json.contenido.nro_identidad;
            document.querySelector('#razon_social').value = json.contenido.razon_social;
            document.querySelector('#telefono').value = json.contenido.telefono;
            document.querySelector('#departamento').value = json.contenido.departamento;
            document.querySelector('#provincia').value = json.contenido.provincia;
            document.querySelector('#distrito').value = json.contenido.distrito;
            document.querySelector('#cod_postal').value = json.contenido.cod_postal;
            document.querySelector('#direccion').value = json.contenido.direccion;
            document.querySelector('#rol').value = json.contenido.rol;
            document.querySelector('#correo').value = json.contenido.correo;
            document.querySelector('#estado').value = json.contenido.estado;
        }else{
            window.location = base_url+"admin-listar-personas";
        }
        console.log(json);
    } catch (error) {
        console.log("Oops, ocurrió un error "+ error);
    }
}

async function actualizar_persona() {
    const datos = new FormData(frmEditarPersona);
    try {
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=actualizar', {
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
    } catch (e) {

    }
}

async function eliminar_persona(id){
    //dos partes, una para preguntar y una para ejecutar
    swal({
        title: "¿Realmente desea eliminar a la persona?",
        text: '',
        icon: "warning",
        buttons: true,
        dangerMode: true
    }).then((willDelete)=>{
        if(willDelete){
            fnt_eliminarPersona(id);
        }
    });
    
}

async function fnt_eliminarPersona(id){
    const formData = new FormData();
    formData.append('id_persona', id);
    try {
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=eliminar',{
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if(json.status){
            swal("Eliminar", "Eliminado correctamente", "success")
            document.querySelector('#fila'+ id).remove();
        }else{
            swal('Eliminar', 'Error al eliminar a la persona', 'warning');
        }
    } catch (error) {
        console.log("Ocurrió un error "+error)
    }
}