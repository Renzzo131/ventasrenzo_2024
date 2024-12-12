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
        $respuesta = $this->conexion->query("SELECT * FROM persona WHERE estado = 1");
        while($objeto = $respuesta->fetch_object()){
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }

    public function obtener_proveedor(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM persona WHERE rol = 'Proveedor' AND estado = 1");
        while($objeto = $respuesta->fetch_object()){
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }

    public function buscarPersonaPorDNI($password){
        $sql = $this->conexion->query("SELECT * FROM persona WHERE nro_identidad = '{$password}'");
        $sql = $sql->fetch_object();
        return $sql;
    }

    public function obtener_persona_id($id){
        $respuesta = $this->conexion->query("SELECT * FROM  persona WHERE id = '{$id}'");
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }

    public function verPersona($id){
        $sql = $this->conexion->query("SELECT * FROM persona WHERE id = '{$id}'");
        //convertimos la respuesta en un objeto
        $sql = $sql->fetch_object();
        return $sql;
    }

    public function actualizarPersona($id_persona, $razon_social, $telefono, $departamento, $provincia, $distrito,$cod_postal,$direccion,$rol,$correo){
        $sql = $this->conexion->query("CALL actualizar_persona('{$id_persona}','{$razon_social}','{$telefono}','{$departamento}','{$provincia}','{$distrito}','{$cod_postal}','{$direccion}','{$rol}','{$correo}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
        
    public function eliminarPersona($id_persona){
        $sql = $this->conexion->query("CALL eliminar_persona('{$id_persona}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
}
