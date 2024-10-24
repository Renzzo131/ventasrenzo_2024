<?php
require_once "../model/categoriaModel.php";

$tipo = $_REQUEST['tipo'];

$objCategoria = new categoriaModel();

if ($tipo == "listar"){
    //Respuesta
    $arr_Respuesta = array('status'=>false, 'contenido'=>'');
    $arrCategorias = $objCategoria->obtener_categoria();

    print_r($arrCategorias);
}

?>