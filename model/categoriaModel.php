<?php
require_once "../librerias/conexion.php";

class CategoriaModel
{

    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function obtener_categoria()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT *FROM categoria");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }
    public function resgistrarCategoria($nombre, $detalle)
    {
        $sql = $this->conexion->query("CALL registrar_categoria('{$nombre}','{$detalle}'");
        //$sql = $this->conexion->query("select * from producto");
        if ($sql === false) {
            // Mostrar el error de la consulta
            die("Error en la consulta: " . $this->conexion->error);
        }
        $sql = $sql->fetch_object();
        return $sql;
    }
}
