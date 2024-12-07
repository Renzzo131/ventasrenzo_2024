<?php
require_once "../librerias/conexion.php";

class ComprasModel
{

    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function obtener_compras()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM compras");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }
    public function registrarCompras($id_producto, $cantidad, $precio, $fecha_compra, $id_persona)
    {
        $sql = $this->conexion->query("CALL registrar_compra('{$id_producto}', '{$cantidad}', '{$precio}', '{$fecha_compra}', '{$id_persona}')");
        //$sql = $this->conexion->query("select * from producto");
        if ($sql === false) {
            // Mostrar el error de la consulta
            die("Error en la consulta: " . $this->conexion->error);
        }
        $sql = $sql->fetch_object();
        return $sql;
    }

    public function verCompra($id){
        $sql = $this->conexion->query("SELECT * FROM compras WHERE id = '{$id}'");
        //convertimos la respuesta en un objeto
        $sql = $sql->fetch_object();
        return $sql;
    }

    public function actualizarCompra($id_compra, $id_producto, $cantidad, $precio, $fecha_compra, $id_persona){
        $sql = $this->conexion->query("CALL actualizar_compra('{$id_compra}','{$id_producto}','{$cantidad}','{$precio}','{$fecha_compra}','{$id_persona}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
}
