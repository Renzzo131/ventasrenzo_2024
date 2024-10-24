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
        $categoria = $_POST['categoria'];
        $imagen1 = $_POST['imagen1'];
        $imagen2 = $_POST['imagen2'];
        $imagen3 = $_POST['imagen3'];
        $imagen4 = $_POST['imagen4'];
        $proveedor = $_POST['proveedor'];
        if ($codigo == "" || $nombre == "" || $detalle == "" || $precio == "" || $stock == "" || $categoria == "" || $imagen1 == "" || $imagen2 == "" || $imagen3 == "" || $imagen4 == "" || $proveedor == "") {
            //Vamos a responder con una estructura de objetos en formato JSON
            //RESPUESTA
            $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error, campos vacíos');
        }else{
            $arrProducto = $objProducto->resgistrarProducto(
                $codigo, $nombre, $detalle, $precio, $stock, $categoria, $imagen1, $imagen2, $imagen3, $imagen4, $proveedor
            );
        }
    }
}

?>