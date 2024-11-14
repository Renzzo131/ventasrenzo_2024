async function iniciar_sesion(){
    let usuario = document.querySelector('#usuario');
    let password = document.querySelector('#pass');
    if (usuario == "" || password == "") {
        alert('Campos vacíos');
        return;
    }
    try {
        //Capturamos datos del html
        //Estamos creando un formulario
        const datos = new FormData(formularioLogin);
        //Enviar datos hacia el controlador
        //
        let respuesta = await fetch(base_url + 'controller/login.php?tipo=iniciar_sesion', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (json.status) {
            swal("Iniciar Sesión", json.mensaje, "success")
        } else {
            swal("Iniciar Sesión", json.mensaje, "error")
        }
        console.log(json);

    } catch (error) {
        console.log("Oops, ocurrió un error " + error);
    }
    //Los programadores suelen utilizar solo la letra e y no error.
}

if (document.querySelector('#formularioLogin')) {
    //Evita que se envie el formulario
    let formularioLogin = document.querySelector('#formularioLogin');
    formularioLogin.onsubmit = function (e){
        e.preventDefault();
        iniciar_sesion();
    }
}