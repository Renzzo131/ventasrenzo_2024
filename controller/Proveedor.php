<?php
require_once "../model/proveedorModel.php";

$tipo = $_REQUEST['tipo'];

$objPersona = new proveedorModel();

if ($tipo == "listar"){
    //Respuesta
    $arr_Respuesta = array('status'=>false, 'contenido'=>'');
    $arrPersona = $objPersona->obtener_proveedor();
    if (!empty($arrPersona)){
       //Recorremos el array para agregar las opciones de las categorias
        for ($i=0; $i < count($arrPersona); $i++) { 
            $id_persona = $arrPersona[$i]->id;
            $persona = $arrPersona[$i]->razon_social;
            $opciones = '';
            $arrPersona[$i]->options = $opciones;
       } 
       $arr_Respuesta['status'] = true;
       $arr_Respuesta['contenido'] = $arrPersona;
    }
    //print_r($arrCategorias);
    echo json_encode($arr_Respuesta);
}

?>