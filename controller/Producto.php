<?php
require_once "../model/productoModel.php";
require_once "../model/categoriaModel.php";
require_once "../model/personaModel.php";
$tipo = $_REQUEST['tipo'];
//Instanciamos clases
$objProducto = new ProductoModel();
$objCategoria = new CategoriaModel();
$objPersona = new PersonaModel();

if ($tipo == "listar") {
    /* echo "listar"; */
    //Respuesta
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arrProductos = $objProducto->obtener_productos();
    if (!empty($arrProductos)) {
        //Recorremos el array para agregar las opciones de las categorias
        for ($i = 0; $i < count($arrProductos); $i++) {
            $id_categoria = $arrProductos[$i]->id_categoria;
            $r_categoria = $objCategoria->obtener_categoria_id($id_categoria);
            $arrProductos[$i]->categoria = $r_categoria;

            $id_persona = $arrProductos[$i]->id_proveedor;
            $r_persona = $objPersona->obtener_persona_id($id_persona);
            $arrProductos[$i]->proveedor = $r_persona;

            $id_producto = $arrProductos[$i]->id;
            $producto = $arrProductos[$i]->nombre;
            //Edita un producto a partir del ID                                 elimina prducto a partir del id
            $opciones = '<a href="'.BASE_URL.'editar-producto/'.$id_producto.'" class="btn btn-warning"><i class="fas fa-edit"></i>Editar</a>
                        <button onclick="eliminar_producto('.$id_producto.')" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Eliminar</button>';
            $arrProductos[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arrProductos;
    }
    //print_r($arrCategorias);
    echo json_encode($arr_Respuesta);
}
//instancia de la clase ProductoModel

if ($tipo == "registrar") {
    //print_r($_POST);
    //echo $_FILES['imagen1']['name'];
    if ($_POST) {
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $imagen1 = 'imagen1';
        $id_categoria = $_POST['categoria'];
        $id_proveedor = $_POST['proveedor'];
        if ($codigo == "" || $nombre == "" || $detalle == "" || $precio == "" || $stock == "" || $imagen1 == "" || $id_categoria == "" || $id_proveedor == "") {
            //Vamos a responder con una estructura de objetos en formato JSON
            //RESPUESTA
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
        } else {
            //Xargar archivos
            $archivo = $_FILES['imagen1']['tmp_name'];
            $destino = '../assets/img_productos/';
            //strtolower convierte todo el texto a minusculas
            $tipoArchivo =  strtolower(pathinfo($_FILES["imagen1"]["name"], PATHINFO_EXTENSION));

            $arrProducto = $objProducto->resgistrarProducto(
                $codigo,
                $nombre,
                $detalle,
                $precio,
                $stock,
                $imagen1,
                $id_categoria,
                $id_proveedor,
                $tipoArchivo
            );
            //id es lo que me devuelve la base de datos por el procedimiento
            if ($arrProducto->id_n > 0) {
                $newid = $arrProducto->id_n;
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso');
                $nombre = $arrProducto->id_n . "." . $tipoArchivo;

                if (move_uploaded_file($archivo, $destino . $nombre)) {
                    /*                     $arr_imagen1 = $objProducto->actualizar_imagen($newid, $nombre); */
                } else {
                    $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso, pero error al subir la imagen');
                }
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar producto');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}

if($tipo == 'ver'){
    //ver si está llegando información, prueba. 
    //print_r($_POST);
    $id_producto = $_POST['id_producto'];
    //funcion flecha llamamos a una funcion
    $arr_Respuesta = $objProducto->verProducto($id_producto);
    /* print_r($arr_Respuesta); */
    //si tenemos respuesta
    if (empty($arr_Respuesta)) {
        $response = array('status'=>false, 'mensaje'=>"Error, no hay información");
    }else{
        $response = array('status'=>true, 'mensaje'=>"Datos encontrados", 'contenido'=>$arr_Respuesta);
    }
    echo json_encode($response);

}
