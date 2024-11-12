<?php
require_once "../model/productoModel.php";
$tipo = $_REQUEST['tipo'];

//instancia de la clase ProductoModel
$objProducto = new ProductoModel();
if ($tipo == "registrar") {
    //print_r($_POST);
    //echo $_FILES['imagen1']['name'];
        if ($_POST) {
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $imagen_1 = 'imagen1';
        $id_categoria = $_POST['categoria'];
        $id_proveedor = $_POST['proveedor'];
        if ($codigo == "" || $nombre == "" || $detalle == "" || $precio == "" || $stock == "" || $imagen_1 == "" || $id_categoria == "" || $id_proveedor == "") {
            //Vamos a responder con una estructura de objetos en formato JSON
            //RESPUESTA
            $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error, campos vacíos');
        }else{
            $arrProducto = $objProducto->resgistrarProducto(
                $codigo, $nombre, $detalle, $precio, $stock,  $imagen_1, $id_categoria, $id_proveedor
            );
            //id es lo que me devuelve la base de datos por el procedimiento
            if ($arrProducto->id > 0) {
                $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso');
                //Xargar archivos
                $archivo = $_FILES['imagen1']['tmp_name'];
                $destino = '/assets/img_productos/';
                //strtolower convierte todo el texto a minusculas
                $tipoArchivo =  strtolower(pathinfo($_FILES["imagen1"]["name"],PATHINFO_EXTENSION));

                $nombre = $arrProducto->id.".".$tipoArchivo;

                if (move_uploaded_file($archivo,$destino.$nombre)) {
                    $arr_imagen1 = $objProducto->actualizar_imagen($id,$nombre);
                }else{
                    $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso, pero error al subir la imagen');
                }

            }else{
                $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar producto');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}



if ($tipo == "listar"){
    //Respuesta
    $arr_Respuesta = array('status'=>false, 'contenido'=>'');
    $arrProductos = $objProducto->obtener_productos();
    if (!empty($arrProductos)){
       //Recorremos el array para agregar las opciones de las categorias
        for ($i=0; $i < count($arrProductos); $i++) { 
            $id_categoria = $arrProductos[$i]->id;
            $categoria = $arrProductos[$i]->nombre;
            $opciones = '';
            $arrProductos[$i]->options = $opciones;
       } 
       $arr_Respuesta['status'] = true;
       $arr_Respuesta['contenido'] = $arrProductos;
    }
    //print_r($arrCategorias);
    echo json_encode($arr_Respuesta);
}
?>