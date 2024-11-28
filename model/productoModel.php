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

    public function resgistrarProducto($codigo, $nombre, $detalle, $precio, $stock, $imagen1, $id_categoria, $id_proveedor, $tipoArchivo)
    {
        $sql = $this->conexion->query("CALL registrar_producto('{$codigo}','{$nombre}','{$detalle}','{$precio}','{$stock}','{$imagen1}','{$id_categoria}','{$id_proveedor}','{$tipoArchivo}')");
        //$sql = $this->conexion->query("select * from producto");
/*         if ($sql === false) {
            // Mostrar el error de la consulta
            die("Error en la consulta: " . $this->conexion->error);
        } */
        $sql = $sql->fetch_object();
        return $sql;
    }

    public function actualizar_imagen($id, $imagen1){
        $sql = $this->conexion->query("UPDATE producto SET imagen_1 = '{$imagen1}' WHERE id = '{$id}'");
        return 1;
    }

    public function obtener_productos()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT *FROM producto");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }

    public function obtener_producto_id($id){
        $respuesta = $this->conexion->query("SELECT * FROM producto WHERE id = '{$id}'");
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }
    public function verProducto($id){
        $sql = $this->conexion->query("SELECT * FROM producto WHERE id = '{$id}'");
        //convertimos la respuesta en un objeto
        $sql = $sql->fetch_object();
        return $sql;
    }

}

?>   