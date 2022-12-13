<?php
require_once ("./Controller/BaseController.php");
require_once ("./lib/validateForm.php");
require_once ("./Model/UsersClient.php");
class CreateController extends BaseController {
    public function index(){
        $this->view("Create/create.php");
    }
    public function insert(){
        $lib = new validateForm();
        $model= new UsersClient();
        $checkCreate=$lib->checkCreate($_POST["name"],$_POST["numberPhone"],$_POST["email"],$_POST["password"],$_POST["confirm"]);
        $checkPhone= $model->checkPhone($_POST["numberPhone"]);
        $checkEmail= $model->checkEmail($_POST["email"]);
        if (!empty($checkPhone)){
            $_SESSION["checkPhone"]= "Số điện thoại đã được đăng ký !";
            $this->redirect("index.php?mod=Create&&act=index");
        }

        if (!empty($checkEmail)){
            $_SESSION["checkEmail"]= "Email đã được đăng ký !";
            $this->redirect("index.php?mod=Create&&act=index");
        }

        if (!$checkCreate[0]){
            $_SESSION["errorCreate"]=$checkCreate[1];
            $this->redirect("index.php?mod=Create&&act=index");

        }else{
            $model= new UsersClient();
            $user= $model->insertClient($_POST["name"],$_POST["numberPhone"],$_POST["email"],$_POST["gender"],$_POST["password"]);
            $_SESSION["successCreate"]=$checkCreate[1];
            $this->redirect("index.php?mod=Login&&act=index");

        }
    }
}
