<?php
require_once "../model/productoModel.php";
$tipo = $_REQUEST['tipo'];

//instancia de la clase ProductoModel
$objProducto = new ProductoModel();
if ($tipo == "registrar") {
    //print_r($_POST);
    if ($_POST) {
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $imagen_1 = $_POST['imagen1'];
        $imagen_2 = $_POST['imagen2'];
        $imagen_3 = $_POST['imagen3'];
        $imagen_4 = $_POST['imagen4'];
        $id_categoria = $_POST['categoria'];
        $id_proveedor = $_POST['proveedor'];
        if ($codigo == "" || $nombre == "" || $detalle == "" || $precio == "" || $stock == "" || $imagen_1 == "" || $imagen_2 == "" || $imagen_3 == "" || $imagen_4 == "" || $id_categoria == "" || $id_proveedor == "") {
            //Vamos a responder con una estructura de objetos en formato JSON
            //RESPUESTA
            $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error, campos vacíos');
        }else{
            $arrProducto = $objProducto->resgistrarProducto(
                $codigo, $nombre, $detalle, $precio, $stock,  $imagen_1, $imagen_2, $imagen_3, $imagen_4, $id_categoria, $id_proveedor
            );
            //id es lo que me devuelve la base de datos por el procedimiento
            if ($arrProducto->id > 0) {
                $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso');
            }else{
                $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar producto');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}

?>