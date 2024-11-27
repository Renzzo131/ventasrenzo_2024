<?php
require_once "../model/comprasModel.php";
require_once "../model/productoModel.php";
require_once "../model/personaModel.php";
$tipo = $_REQUEST['tipo'];
//Instanciamos clases
$objProducto = new ProductoModel();
$objPersona = new PersonaModel();

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
            $arrCompras = $objCompras->registrarCompras($id_producto, $cantidad, $precio, $fecha_compra, $id_persona);
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


if ($tipo == "listar") {
    /* echo "listar"; */
        //Respuesta
        $arr_Respuesta = array('status' => false, 'contenido' => '');
        $arrCompras = $objCompras->obtener_compras();
        if (!empty($arrCompras)) {
            //Recorremos el array para agregar las opciones de las categorias
            for ($i = 0; $i < count($arrCompras); $i++) {

                $id_persona = $arrCompras[$i]->id_persona;
                $r_persona = $objPersona->obtener_persona_id($id_persona);
                $arrCompras[$i]->proveedor=$r_persona;

                $id_producto = $arrCompras[$i]->id_producto;
                $r_producto = $objProducto->obtener_producto_id($id_producto);
                $arrCompras[$i]->producto=$r_producto;


                $id_compras= $arrCompras[$i]->id;
                $opciones = '';
                $arrCompras[$i]->options = $opciones;
            }
            $arr_Respuesta['status'] = true;
            $arr_Respuesta['contenido'] = $arrCompras;
        }
        //print_r($arrCategorias);
        echo json_encode($arr_Respuesta);


}

?>