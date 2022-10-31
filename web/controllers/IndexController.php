<?php

class IndexController extends Controller {

    private string $pageTpl = "/views/main.tpl.php";

    public function __construct() {
        $this->model = new IndexModel();
        $this->view = new View();
    }

    public function index() {
        $this->pageData['title'] = "Добавить пользователя";
        $this->view->render($this->pageTpl, $this->pageData);
    }
}
