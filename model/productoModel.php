<?php
require_once "../librerias/conexion.php";
class ProductoModel
{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function resgistrarProducto($codigo, $nombre, $detalle, $precio, $stock, $imagen_1, $id_categoria, $id_proveedor)
    {
        $sql = $this->conexion->query("CALL registrar_producto('{$codigo}','{$nombre}','{$detalle}','{$precio}','{$stock}','{$imagen_1}','{$id_categoria}','{$id_proveedor}')");
        //$sql = $this->conexion->query("select * from producto");
        if ($sql === false) {
            // Mostrar el error de la consulta
            die("Error en la consulta: " . $this->conexion->error);
        }
        $sql = $sql->fetch_object();
        return $sql;
    }

    public function actualizar_imagen($id, $imagen1){
        $sql = $this->conexion->query("UPDATE producto SET imagen_1 = '{$imagen1}' WHERE id = '{$id}'");
        return 1;
    }
}

    