<?php

    require_once "./models/modelsViews.php";

    class controllerViews extends modelsViews {

        /*  --  Controller for getting the template  -- */
        public function controller_get_template() {
            return require_once "./views/templates/template.php";
        }

        /*  --  Controller for getting the different views  -- */
        public function controller_get_view() {
            if (isset($_GET['views'])) {
                $path = explode("/", $_GET['views']);
                $response = modelsViews::model_get_view($path[0]);    # I can call it by :: because it is a static function type
            }
            else {
                $response = "login";
            }
            return $response;
        }
    }