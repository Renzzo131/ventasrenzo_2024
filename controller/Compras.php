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


if($tipo == 'ver'){
    //ver si está llegando información, prueba. 
    //print_r($_POST);
    $id_compra = $_POST['id_compra'];
    //funcion flecha llamamos a una funcion
    $arr_Respuesta = $objCompras->verCompra($id_compra);
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


elseif  ($tipo == "listar") {
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
                $opciones = '<a href="'.BASE_URL.'editar-compra/'.$id_compras.'" class="btn btn-warning"><i class="fas fa-edit"></i>Editar</a>
                        <button onclick="eliminar_producto('.$id_compras.')" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Eliminar</button>';
                $arrCompras[$i]->options = $opciones;
            }
            $arr_Respuesta['status'] = true;
            $arr_Respuesta['contenido'] = $arrCompras;
        }
        //print_r($arrCategorias);
        echo json_encode($arr_Respuesta);


}



elseif ($tipo == "actualizar") {
    $id_compra = $_POST['id_compra'];
    $id_producto = $_POST['id_producto'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $fecha_compra = $_POST['fecha_compra'];
    $id_persona = $_POST['id_persona'];
    if ($id_compra == "" || $id_producto == "" || $cantidad == "" || $precio == "" || $fecha_compra == ""|| $id_persona == "") {
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
    } else {
        $arrCompras = $objCompras->actualizarCompra($id_compra, $id_producto, $cantidad, $precio, $fecha_compra, $id_persona);
        if ($arrCompras->p_id > 0) {
            $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualizado Correctamente');
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar persona');
        }
    }
    echo json_encode($arr_Respuesta);
}
?>