<?php
require_once "../model/personaModel.php";
$tipo = $_REQUEST['tipo'];

//instancia de la clase ProductoModel
$objProducto = new ProductoModel();
if ($tipo == "registrar") {
    //print_r($_POST);
    //echo $_FILES['imagen1']['name'];
        if ($_POST) {
        $nro_identidad = $_POST['nro_identidad'];
        $razon_social = $_POST['razon_social'];
        $telefono = $_POST['telefono'];
        $departamento = $_POST['departamento'];
        $provincia = $_POST['provincia'];
        $distrito = 'distrito';
        $cod_postal = $_POST['cod_postal'];
        $direccion = $_POST['direccion'];
        $rol = $_POST['rol'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $estado = $_POST['estado'];
        if ($nro_identidad == "" || $razon_social == "" || $telefono == "" || $departamento == "" || $provincia == "" || $distrito == "" || $cod_postal == "" || $direccion == ""|| $rol == ""|| $correo == ""|| $password == ""|| $estado == "") {
            //Vamos a responder con una estructura de objetos en formato JSON
            //RESPUESTA
            $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error, campos vacíos');
        }else{
            $arrPersona = $objProducto->resgistrarProducto(
                $nro_identidad, $razon_social, $telefono, $departamento, $provincia,  $distrito, $cod_postal, $direccion, $rol, $correo, $password, $estado
            );
            //id es lo que me devuelve la base de datos por el procedimiento
            if ($arrPersona->id > 0) {
                $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso');
            }else{
                $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar producto');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}
?>