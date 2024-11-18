<?php
require_once ("../model/personaModel.php");

$objPersona = new personaModel();

$tipo = $_GET['tipo'];

if($tipo == "iniciar_sesion"){
    //print_r($_POST);
    $usuario = trim($_POST['usuario']);
    $password = trim($_POST['pass']);
    $arrResponse = array('status'=>false, 'msg'=>'');


    $arrPersona = $objPersona->buscarPersonaPorDNI($usuario);
    //print_r($arrPersona);
    if(empty($arrPersona)){
        $arrResponse = array('status'=>false, 'msg'=>'Error, el usuario no está registrado en el sistema');
    }else{
        if (password_verify($password, $arrPersona->password)) {
            session_start();
            $_SESSION['sesion_ventas_id'] = $arrPersona->id;
            $_SESSION['sesion_ventas_dni'] = $arrPersona->nro_identidad;
            $_SESSION['sesion_ventas_nombres'] = $arrPersona->razon_social;
            $arrResponse = array('status'=>true, 'msg'=>'Ingresar al sistema');
        }else{
            $arrResponse = array('status'=>false, 'msg'=>'Error, la contraseña no coincide');
        }
    }
    echo json_encode($arrResponse);
}

else if ($tipo == "cerrar_sesion") {
    session_start();
    session_unset();
    session_destroy();
    $arrResponse = array('status'=>true);
    echo json_encode($arrResponse);
}
die;
?>