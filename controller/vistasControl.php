<?php

require_once "./model/vistasModel.php";

    class vistasControlador extends vistaModelo{

        public function obtenerPlantillaControlador(){
            return require_once "./views/plantilla.php";
        }

        public function obtenerVistaControlador(){
            /**utilizamos isset para comprobar si la variable está definida y almacena algo*/
            if (isset($_GET['views'])) {
                /**explode separar una cadena de texto a través de un separador y lo convierte en una lista o array */
                $ruta = explode("/",$_GET['views']);
                $respuesta = vistaModelo::obtener_vista($ruta[0]);
            }else {
                $respuesta = "login";
            }
            return $respuesta;
        }
    }
?>