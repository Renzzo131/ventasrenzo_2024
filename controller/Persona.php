<?php
require_once "../model/personaModel.php";
$tipo = $_REQUEST['tipo'];

//instancia de la clase ProductoModel
$objPersona = new PersonaModel();
if ($tipo == "registrar") {
    //print_r($_POST);
    //echo $_FILES['imagen1']['name'];
        if ($_POST) {
        $nro_identidad = $_POST['nro_identidad'];
        $razon_social = $_POST['razon_social'];
        $telefono = $_POST['telefono'];
        $departamento = $_POST['departamento'];
        $provincia = $_POST['provincia'];
        $distrito = $_POST['distrito'];
        $cod_postal = $_POST['cod_postal'];
        $direccion = $_POST['direccion'];
        $rol = $_POST['rol'];
        $correo = $_POST['correo'];
        $password = $_POST['nro_identidad'];
        $estado = $_POST['estado'];


        if ($nro_identidad == "" || $razon_social == "" || $telefono == "" || $departamento == "" || $provincia == "" || $distrito == "" || $cod_postal == "" || $direccion == ""|| $rol == ""|| $correo == ""|| $password == ""|| $estado == "") {
            //Vamos a responder con una estructura de objetos en formato JSON
            //RESPUESTA
            $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error, campos vacíos');
        }else{
            //Hasheado de contraseña cuando se envie una contraseña
            $secure_password= password_hash($nro_identidad, PASSWORD_DEFAULT);

            $arrPersona = $objPersona->resgistrarPersona(
                $nro_identidad, $razon_social, $telefono, $departamento, $provincia,  $distrito, $cod_postal, $direccion, $rol, $correo, $secure_password, $estado
            );
            //id es lo que me devuelve la base de datos por el procedimiento
            if ($arrPersona->id > 0) {
                $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso');
            }else{
                $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar persona');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}

if ($tipo == "listar"){
    //Respuesta
    $arr_Respuesta = array('status'=>false, 'contenido'=>'');
    $arrPersonas = $objPersona->obtener_personas();
    if (!empty($arrPersonas)){
       //Recorremos el array para agregar las opciones de las categorias
        for ($i=0; $i < count($arrPersonas); $i++) { 
            $id_persona = $arrPersonas[$i]->id;
            $razon_social = $arrPersonas[$i]->razon_social;
            $opciones = '';
            $arrPersonas[$i]->options = $opciones;
       } 
       $arr_Respuesta['status'] = true;
       $arr_Respuesta['contenido'] = $arrPersonas;
    }
    //print_r($arrCategorias);
    echo json_encode($arr_Respuesta);
}

if ($tipo == "listarp"){
    //Respuesta
    $arr_Respuesta = array('status'=>false, 'contenido'=>'');
    $arrPersonas = $objPersona->obtener_proveedor();
    if (!empty($arrPersonas)){
       //Recorremos el array para agregar las opciones de las categorias
        for ($i=0; $i < count($arrPersonas); $i++) { 
            $id_persona = $arrPersonas[$i]->id;
            $razon_social = $arrPersonas[$i]->razon_social;
            $opciones = '';
            $arrPersonas[$i]->options = $opciones;
       } 
       $arr_Respuesta['status'] = true;
       $arr_Respuesta['contenido'] = $arrPersonas;
    }
    //print_r($arrCategorias);
    echo json_encode($arr_Respuesta);
}
?>