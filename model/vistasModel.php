<?php

class vistaModelo{
    protected static function obtener_vista($vista){
        $palabras_permitidas = ['usuario','tienda','nosotros','blog','carrito','contacto','producto','detalle','nuevo-producto'];
        if (in_array($vista,$palabras_permitidas)) {
            if (is_file("./views/".$vista.".php")) {
                $contenido = "./views/".$vista.".php";
            }else{
                $contenido = "404";
            }
        }elseif ($vista =="login" || $vista=="index") {
            $contenido = "login";
        }else{
            $contenido = "404";
        }
        return $contenido;
    }
}

?>