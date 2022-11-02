<?php

class IndexController extends Controller
{

    private string $pageTpl = "/views/main.tpl.php";

    public function __construct()
    {
        parent::__construct();
        $this->model = new IndexModel();
        $this->view = new View();
    }

    public function index()
    {
        $this->pageData['title'] = "Add new user";
        $this->pageData['form-title'] = "Add new user";
        $this->pageData['btn-title'] = "Add";


        $this->view->render($this->pageTpl, $this->pageData);
    }

    public function addNewUser()
    {

        if (!empty($_POST) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['gender']) && !empty($_POST['status'])) {
            $userFullName = $_POST['name'];
            $userEmail = $_POST['email'];
            $userGender = $_POST['gender'];
            $userStatus = $_POST['status'];

            if ($this->model->addNewUser($userFullName, $userEmail, $userGender, $userStatus)) {
                header("Location: http://localhost/form-users/web/#");
                echo json_encode(array("success" => true, "text" => "Пользователь добавлен"));
            } else {
                echo json_encode(array("success" => false, "text" => "Ошибка добавления"));
            }
        } else {
            echo json_encode(array("success" => false, "text" => "Некорректные данные"));
        }
    }

}
