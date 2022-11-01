<?php

class Controller {

    public $model;
    public $view;
    public $pageData = array();

    public function __construct() {
        $this->model = new Model();
        $this->view = new View();
    }

}
