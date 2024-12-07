<?php
require_once "../model/personaModel.php";
$tipo = $_REQUEST['tipo'];

//instancia de la clase ProductoModel
$objPersona = new PersonaModel();

if($tipo == 'ver'){
    //ver si está llegando información, prueba. 
    //print_r($_POST);
    $id_persona = $_POST['id_persona'];
    //funcion flecha llamamos a una funcion
    $arr_Respuesta = $objPersona->verPersona($id_persona);
    /* print_r($arr_Respuesta); */
    //si tenemos respuesta
    if (empty($arr_Respuesta)) {
        $response = array('status'=>false, 'mensaje'=>"Error, no hay información");
    }else{
        $response = array('status'=>true, 'mensaje'=>"Datos encontrados", 'contenido'=>$arr_Respuesta);
    }
    echo json_encode($response);

}


elseif ($tipo == "registrar") {
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



elseif ($tipo == "listar"){
    //Respuesta
    $arr_Respuesta = array('status'=>false, 'contenido'=>'');
    $arrPersonas = $objPersona->obtener_personas();
    if (!empty($arrPersonas)){
       //Recorremos el array para agregar las opciones de las categorias
        for ($i=0; $i < count($arrPersonas); $i++) { 
            $id_persona = $arrPersonas[$i]->id;
            $razon_social = $arrPersonas[$i]->razon_social;
            $opciones = '<a href="'.BASE_URL.'editar-persona/'.$id_persona.'" class="btn btn-warning"><i class="fas fa-edit"></i>Editar</a>
                        <button onclick="eliminar_producto('.$id_persona.')" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Eliminar</button>';
            $arrPersonas[$i]->options = $opciones;
       } 
       $arr_Respuesta['status'] = true;
       $arr_Respuesta['contenido'] = $arrPersonas;
    }
    //print_r($arrCategorias);
    echo json_encode($arr_Respuesta);
}

elseif ($tipo == "listarp"){
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


elseif ($tipo == "actualizar") {
    $id_persona = $_POST['id_persona'];
    $razon_social = $_POST['razon_social'];
    $telefono = $_POST['telefono'];
    $departamento = $_POST['departamento'];
    $provincia = $_POST['provincia'];
    $distrito = $_POST['distrito'];
    $cod_postal = $_POST['cod_postal'];
    $direccion = $_POST['direccion'];
    $rol = $_POST['rol'];
    $correo = $_POST['correo'];
    $estado = $_POST['estado'];
    if ($id_persona == "" || $razon_social == "" || $telefono == "" || $departamento == "" || $provincia == ""|| $distrito == ""|| $cod_postal == ""|| $direccion == ""|| $rol == ""|| $correo == ""|| $estado == "") {
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
    } else {
        $arrPersona = $objPersona->actualizarPersona($id_persona, $razon_social, $telefono, $departamento, $provincia, $distrito,$cod_postal,$direccion,$rol,$correo,$estado);
        if ($arrPersona->p_id > 0) {
            $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualizado Correctamente');
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar persona');
        }
    }
    echo json_encode($arr_Respuesta);
}

?>