<?php
require_once "../librerias/conexion.php";
class PersonaModel
{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function resgistrarPersona($nro_identidad, $razon_social, $telefono, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $correo, $password, $estado)
    {
        $sql = $this->conexion->query("CALL registrar_persona('{$nro_identidad}','{$razon_social}','{$telefono}','{$departamento}','{$provincia}','{$distrito}','{$cod_postal}','{$direccion}','{$rol}','{$correo}','{$password}','{$estado}')");
        //$sql = $this->conexion->query("select * from producto");
        if ($sql === false) {
            // Mostrar el error de la consulta
            die("Error en la consulta: " . $this->conexion->error);
        }
        $sql = $sql->fetch_object();
        return $sql;
    }

    public function obtener_personas(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM persona WHERE rol = 'Proveedor'");
        while($objeto = $respuesta->fetch_object()){
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }
}
