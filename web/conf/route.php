<?php

/*
Routing class
 **/

class Routing {

    public static function buildRoute() {

        /*
        default controller and action
        if something is missing
        */
        $controllerName = "IndexController";
        $modelName = "IndexModel";
        $action = "index";

        //REQUEST_URI is address as '/users/userID'
        //$route is array of strings as ['users', 'userID']
        $route = explode("/", $_SERVER['REQUEST_URI']);
        //Define controller
        if($route[3] !== '') {
            $controllerName = ucfirst($route[3]. "Controller");
            $modelName = ucfirst($route[3]. "Model");
        }

        require_once CONTROLLER_PATH . $controllerName . ".php"; // IndexController.php
        require_once MODEL_PATH . $modelName . ".php"; // IndexModel.php

        if(isset($route[4]) && $route[4] !='') {
            $action = $route[4];
        }

        $controller = new $controllerName();
        $controller->$action(); // $controller->index()

    }

}
