<?php
require_once "../model/personaModel.php";
$tipo = $_REQUEST['tipo'];

// Instancia de la clase PersonaModel
$objPersona = new PersonaModel();

if ($tipo == "registrar") {
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
        $password = $_POST['password']; // Contraseña sin hash (se va a hashear)
        $estado = $_POST['estado'];

        // Validación de campos vacíos
        if ($nro_identidad == "" || $razon_social == "" || $telefono == "" || $departamento == "" || $provincia == "" || $distrito == "" || $cod_postal == "" || $direccion == "" || $rol == "" || $correo == "" || $password == "" || $estado == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
        } else {
            // Hashear la contraseña usando MD5
            $passwordHash = md5($password);  // Aquí es donde haces el hash

            // Registrar persona con la contraseña hasheada
            $arrPersona = $objPersona->resgistrarPersona(
                $nro_identidad, $razon_social, $telefono, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $correo, $passwordHash, $estado
            );

            // Si el ID de la persona es mayor a 0, el registro fue exitoso
            if ($arrPersona->id > 0) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar persona');
            }
        }
        echo json_encode($arr_Respuesta);
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
?>