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

?>