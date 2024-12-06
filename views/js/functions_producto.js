async function listar_productos() {
    try {
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=listar');
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
                        <td>${item.codigo}</td>
                        <td>${item.nombre}</td>
                        <td>${item.precio}</td>
                        <td>${item.stock}</td>
                        <td>${item.categoria.nombre}</td>
                        <td>${item.proveedor.razon_social}</td>
                        <td>${item.options}</td>
                `; document.querySelector('#tbl_producto').appendChild(nueva_fila)
            });
        }

    } catch (error) {
        console.log("Error al cargar productos" + error);
    }
}
if (document.querySelector('#tbl_producto')) {
    listar_productos();
}

async function registrar_productos() {
    let codigo = document.getElementById('codigo').value;
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value;
    let categoria = document.querySelector('#categoria').value;
    let imagen1 = document.querySelector('#imagen1').value;
    let proveedor = document.querySelector('#proveedor').value;
    //Estamos validando que no se envien campos vacios
    if (codigo == "" || nombre == "" || detalle == "" || precio == "" || stock == "" || categoria == "" || imagen1 == "" || proveedor == "") {
        alert("Error. Campos vacíos");
        return;
    }

    try {
        //Capturamos datos del html
        //Estamos creando un formulario
        const datos = new FormData(formil);
        //Enviar datos hacia el controlador
        //
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=registrar', {
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

async function listar_categoria() {
    try {
        let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option disabled selected>Seleccione una categoría</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.nombre + '</option>';
            });
            document.getElementById('categoria').innerHTML = contenido_select;
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


async function ver_producto(id){
    const formData= new FormData();
    //agregale un hijo   creale un nombre y pasale el id
    formData.append('id_producto',id);
    try {
        //respndemos e indicamos hacia donde queremos enviar
        let respuesta = await fetch(base_url+'controller/Producto.php?tipo=ver', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#id_producto').value = json.contenido.id;
            document.querySelector('#img').value = json.contenido.imagen_1;
            document.querySelector('#codigo').value = json.contenido.codigo;
            document.querySelector('#nombre').value = json.contenido.nombre;
            document.querySelector('#detalle').value = json.contenido.detalle;
            document.querySelector('#precio').value = json.contenido.precio;
            /* document.querySelector('#imagen1').value = json.contenido.imagen1; */
            document.querySelector('#categoria').value = json.contenido.id_categoria;
            document.querySelector('#proveedor').value = json.contenido.id_proveedor;

        }else{
            window.location = base_url+"admin-listar-productos";
        }
        console.log(json);
    } catch (error) {
        console.log("Oops, ocurrió un error "+ error);
    }
}


async function actualizar_producto() {
    const datos = new FormData(formil);
    try {
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=actualizar', {
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