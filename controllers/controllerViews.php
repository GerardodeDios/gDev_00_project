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
                $response = modelsViews::model_get_view($path[0]);    # Lo hago así porque la función es de tipo static y puedo llamarla con los ::
            }
            else {
                $response = "login";
            }
            return $response;
        }
    }