<?php

    require_once "./config/app.php";
    require_once "./controllers/viewsController.php";

    $plantilla = new viewsController();
    $plantilla -> obtener_plantilla_controlador();

?>