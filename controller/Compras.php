<?php
require_once "../model/comprasModel.php";
$tipo = $_REQUEST['tipo'];
//instancia de la clase ProductoModel
$objCompras = new ComprasModel();
if ($tipo == "registrar") {
    //print_r($_POST);
    //echo $_FILES['imagen1']['name'];
        if ($_POST) {
        $id_producto = $_POST['id_producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $fecha_compra = $_POST['fecha_compra'];
        $id_persona = $_POST['id_persona'];
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
                $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar la compra');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}

?>