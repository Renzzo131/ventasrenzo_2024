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
        const datos = new FormData(frmNuevoCategoria);
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

async function ver_categoria(id){
    const formData= new FormData();
    //agregale un hijo   creale un nombre y pasale el id
    formData.append('id_categoria',id);
    try {
        //respndemos e indicamos hacia donde queremos enviar
        let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=ver', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#id_categoria').value = json.contenido.id;
            document.querySelector('#nombre').value = json.contenido.nombre;
            document.querySelector('#detalle').value = json.contenido.detalle;
        }else{
            window.location = base_url+"admin-listar-categorias";
        }
        console.log(json);
    } catch (error) {
        console.log("Oops, ocurrió un error "+ error);
    }
}

async function actualizar_categoria() {
    const datos = new FormData(frmEditarCategoria);
    try {
        let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=actualizar', {
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

async function eliminar_categoria(id){
    //dos partes, una para preguntar y una para ejecutar
    swal({
        title: "¿Realmente desea eliminar la categoría?",
        text: '',
        icon: "warning",
        buttons: true,
        dangerMode: true
    }).then((willDelete)=>{
        if(willDelete){
            fnt_eliminarCategoria(id);
        }
    });
    
}

async function fnt_eliminarCategoria(id){
    const formData = new FormData();
    formData.append('id_categoria', id);
    try {
        let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=eliminar',{
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
            swal('Eliminar', 'Error al eliminar categoria', 'warning');
        }
    } catch (error) {
        console.log("Ocurrió un error "+error)
    }
}