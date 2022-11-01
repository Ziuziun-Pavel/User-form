<?php

class UsersController extends Controller {

    private $pageTpl = "/views/users.tpl.php";

    public function __construct() {
        parent::__construct();
        $this->model = new UsersModel();
        $this->view = new View();
    }

    public function index() {
        $this->pageData['title'] = 'Users list';

        $users = $this->model->getUsers();
        $this->pageData['users'] = $users;

        $this->view->render($this->pageTpl, $this->pageData);
    }

    public function deleteUser() {

        if(!empty($_GET) && !empty($_GET['id'])) {
            $userId = $_GET['id'];
            if($this->model->deleteUser($userId)) {
                header('Location: http://localhost/form-users/web/users');
                echo json_encode(array("success" => true, "text" => "Пользователь удален"));
            } else{
                echo json_encode(array("success" => false, "text" => "Ошибка удаления"));
            }
        } else {
            header('Location: http://localhost/form-users/web/users');
            echo json_encode(array("success" => false, "text" => "Произошла ошибка при удалении"));
        }
    }

}