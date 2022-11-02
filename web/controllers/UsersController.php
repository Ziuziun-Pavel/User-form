<?php

class UsersController extends Controller {

    private $pageTpl = "/views/users.tpl.php";
    private $page1Tpl = "/views/main.tpl.php";


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
            header('Location: http://localhost/form-users/web/users');
            if($this->model->deleteUser($userId)) {
                echo json_encode(array("success" => true, "text" => "Пользователь удален"));
            } else{
                echo json_encode(array("success" => false, "text" => "Ошибка удаления"));
            }
        } else {
            header('Location: http://localhost/form-users/web/users');
            echo json_encode(array("success" => false, "text" => "Произошла ошибка при удалении"));
        }
    }

    public function getUser() {
        if(!isset($_GET['id'])) {
            echo json_encode(array("success" => false));
        } else {
            $productId = $_GET['id'];
            $productInfo = json_encode($this->model->getUserById($productId));
            echo $productInfo;
        }
    }

    public function editPage() {
        $this->pageData['title'] = 'Edit User';
        $this->pageData['form-title'] = "Edit user";
        $this->pageData['btn-title'] = "Edit";
        $this->pageData['name'] = "Edit";

        $userId = $_GET['id'];
        $user = $this->model->getUserById($userId);
        $this->pageData['user'] = $user;

        $this->view->render($this->page1Tpl, $this->pageData);

    }

    public function updateUserData() {
        if(!empty($_POST) && !empty($_POST['name']) && !empty($_POST['gender']) && !empty($_POST['email']) && !empty($_POST['status'])) {
            $userId = $_GET['id'];
            $userFullName = $_POST['name'];
            $userGender = $_POST['gender'];
            $userEmail = $_POST['email'];
            $userStatus = $_POST['status'];
            header('Location: http://localhost/form-users/web/users');
            if($this->model->updateUserInfo($userId, $userFullName, $userGender, $userEmail, $userStatus)) {
                echo json_encode(array("success" => true, "text" => "Данные пользователя сохранены"));
            } else {
                echo json_encode(array("success" => false, "text" => "Ошибка сохранения данных"));
            }
        } else {
            echo json_encode(array("success" => false, "text" => "Заполните все данные"));
        }
    }



}