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
        const datos = new FormData(document.getElementById('frmNuevoCompra'));
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

async function listar_compras() {
    try {
        let respuesta = await fetch(base_url + 'controller/Compras.php?tipo=listar');
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
                        <td>${item.producto.nombre}</td>
                        <td>${item.cantidad}</td>
                        <td>${item.precio}</td>
                        <td>${item.fecha_compra}</td>
                        <td>${item.proveedor.razon_social}</td>
                        <td>${item.options}</td>
                `; document.querySelector('#tbl_compras').appendChild(nueva_fila)
            });
        }

    } catch (error) {
        console.log("Error al cargar las compras" + error);
    }
}
if (document.querySelector('#tbl_compras')) {
    listar_compras();
}

async function listar_producto() {
    try {
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option disabled selected>Seleccione un producto</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.nombre + '</option>';
            });
            document.getElementById('id_producto').innerHTML = contenido_select;
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
        console.log("Error al cargar categorias" + error);
    }
}

async function listar_personas_compras() {
    try {
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=listarp');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option disabled selected>Seleccione un proveedor</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.razon_social + '</option>';
            });
            document.getElementById('id_persona').innerHTML = contenido_select;

        }

        console.log(respuesta);
    } catch (error) {
        console.log("Error al cargar clientes" + error);
    }
}

async function ver_compra(id){
    const formData= new FormData();
    //agregale un hijo   creale un nombre y pasale el id
    formData.append('id_compra',id);
    try {
        //respndemos e indicamos hacia donde queremos enviar
        let respuesta = await fetch(base_url+'controller/Compras.php?tipo=ver', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#id_compra').value = json.contenido.id;
            document.querySelector('#id_producto').value = json.contenido.id_producto;
            document.querySelector('#cantidad').value = json.contenido.cantidad;
            document.querySelector('#precio').value = json.contenido.precio;
            document.querySelector('#fecha_compra').value = json.contenido.fecha_compra;
            document.querySelector('#id_persona').value = json.contenido.id_persona;
        }else{
            window.location = base_url+"admin-listar-compras";
        }
        console.log(json);
    } catch (error) {
        console.log("Oops, ocurrió un error "+ error);
    }
}


async function actualizar_compra() {
    const datos = new FormData(frmEditarCompra);
    try {
        let respuesta = await fetch(base_url + 'controller/Compras.php?tipo=actualizar', {
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

