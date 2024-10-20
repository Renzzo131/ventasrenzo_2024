async function registrar_productos(){
    let codigo = document.getElementById('codigo').value;
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value;
    let categoria = document.querySelector('#categoria').value;
    let imagen_1 = document.querySelector('#imagen1').value;
    let imagen_2 = document.querySelector('#imagen2').value;
    let imagen_3 = document.querySelector('#imagen3').value;
    let imagen_4 = document.querySelector('#imagen4').value;
    let proveedor = document.querySelector('#proveedor').value;
    //Estamos validando que no se envien campos vacios
    if(codigo == "" || nombre == "" || detalle == "" || precio == "" || stock == "" || categoria == "" || imagen_1 == "" || imagen_2 == "" || imagen_3 == "" || imagen_4 == "" || proveedor == ""){
        alert("Error. Campos vacíos");
        return;
    }
    
    try {
        //Capturamos datos del html
        //Estamos creando un formulario
        const datos = new FormData(formil);
        //Enviar datos hacia el controlador
        let respuesta = await fetch(base_url+'controller/Producto.php?tipo=registrar',{
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        body: datos});
        
        console.log(respuesta);

    } catch (error) {
        console.log("Oops, ocurrió un error " + error);
    }
    //Los programadores suelen utilizar solo la letra e y no error.
}