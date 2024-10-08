<?php

    # -- =====  Models Classes  ===== -- #

    /* Este es el modelo para obtener las vistas a renderizar tras la petición del cliente */
    class modelsViews {
        protected static function model_get_view ($view) {

            # Lista de palabras permitidas que obtendran vistas a renderizar - Si no está en la lista da error 404
            $viewList = [];

            if(in_array($view, $viewList)) {
                if(is_file("./views/templates/".$view."-template.php")){
                    $content = "./views/templates/".$view."-template.php";
                }
                else {
                    $content = "404";
                }
            }
            elseif ($view == "login" || $view == "index"){
                $content = "login";
            }
            else {
                $content = "404";
            }
            return $content;
        }
    }