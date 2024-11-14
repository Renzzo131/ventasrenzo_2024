async function iniciar_sesion(){
    console.log('payasito');
}

if (document.querySelector('#formularioLogin')) {
    //Evita que se envie el formulario
    let formularioLogin = document.querySelector('#formularioLogin');
    formularioLogin.onsubmit = function (e){
        e.preventDefault();
        iniciar_sesion();
    }
}