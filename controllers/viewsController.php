<?php

    require_once "./models/viewsModels.php";

    class viewsController extends viewsModels {

        /*  ----- Controlador Obtener Vistas  ----- */
        public function obtener_plantilla_controlador() {
            return require_once "./views/plantilla.php";
        }

        /*  ----- Controlador Obtener Vistas  ----- */
        public function obtener_vistas_controlador() {
            if (isset($_GET['views'])) {
                $ruta = explode("/", $_GET['views']);
                $respuesta = viewsModels::obtener_vistas_modelo($ruta[0]);
            }
            else {
                $respuesta = "login";
            }
            return $respuesta;
        }
    }