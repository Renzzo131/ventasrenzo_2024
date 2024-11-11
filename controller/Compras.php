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


//instancia de la clase ProductoModel
$objCompras = new ComprasModel();
if ($tipo == "registrar") {
    //print_r($_POST);
    //echo $_FILES['imagen1']['name'];
        if ($_POST) {
        $id_producto = $_POST['nombre'];
        $cantidad = $_POST['detalle'];
        $precio = $_POST['detalle'];
        $fecha_compra = $_POST['detalle'];
        $id_persona = $_POST['detalle'];
        if ($id_producto == "" || $cantidad == ""|| $precio == ""|| $fecha_compra == ""|| $id_persona == "") {
            //Vamos a responder con una estructura de objetos en formato JSON
            //RESPUESTA
            $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error, campos vacíos');
        }else{
            $arrCompras = $objCompras->resgistrarCompras($id_producto, $cantidad, $precio, $fecha_compra, $id_persona);
            //id es lo que me devuelve la base de datos por el procedimiento
            if ($arrCompras->id > 0) {
                $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso');
            }else{
                $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar producto');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}

?>