<?php
require_once "./config/config.php";
require_once "./controller/vistasControl.php";
$mostrar = new vistasControlador();

$vista = $mostrar->obtenerVistaControlador();

if ($vista=="login" || $vista=="404") {
    require_once "./views/".$vista.".php";
}else {
    /**No importa si hay erro, muestra todo (include) */
    include "./views/include/header.php";
    include $vista;
    include "./views/include/footer.php";
}

?>