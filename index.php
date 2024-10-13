<?php

    require_once "./config/app.php";
    require_once "./controllers/controllerViews.php";

    $template = new controllerViews();
    $template -> controller_get_template();

?>
