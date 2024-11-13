<?php
require_once "../model/categoriaModel.php";

$tipo = $_REQUEST['tipo'];

$objCategoria = new categoriaModel();

if ($tipo == "listar"){
    //Respuesta
    $arr_Respuesta = array('status'=>false, 'contenido'=>'');
    $arrCategorias = $objCategoria->obtener_categoria();
    if (!empty($arrCategorias)){
       //Recorremos el array para agregar las opciones de las categorias
        for ($i=0; $i < count($arrCategorias); $i++) { 
            $id_categoria = $arrCategorias[$i]->id;
            $categoria = $arrCategorias[$i]->nombre;
            $opciones = '';
            $arrCategorias[$i]->options = $opciones;
       } 
       $arr_Respuesta['status'] = true;
       $arr_Respuesta['contenido'] = $arrCategorias;
    }
    //print_r($arrCategorias);
    echo json_encode($arr_Respuesta);
}

require_once "../model/categoriaModel.php";
$tipo = $_REQUEST['tipo'];

//instancia de la clase ProductoModel
$objCategoria = new CategoriaModel();
if ($tipo == "registrar") {
    //print_r($_POST);
    //echo $_FILES['imagen1']['name'];
        if ($_POST) {
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        if ($nombre == "" || $detalle == "") {
            //Vamos a responder con una estructura de objetos en formato JSON
            //RESPUESTA
            $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error, campos vacíos');
        }else{
            $arrCategoria = $objCategoria->resgistrarCategoria($nombre, $detalle);
            //id es lo que me devuelve la base de datos por el procedimiento
            if ($arrCategoria->id > 0) {
                $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso');
            }else{
                $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar categoria');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}

?>