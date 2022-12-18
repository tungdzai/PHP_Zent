<?php
require_once ("./Controller/BaseController.php");
require_once ("./Model/UsersClient.php");
class LoginController extends BaseController {
    public function index(){
        $this->view("Login/login.php");
    }
    public function handleLogin(){
        $user= new UsersClient();
        if (empty($_POST["email"]) || empty($_POST["password"])){
            $_SESSION["errorLogin"]="Email và password không được để trống !";
            $this->redirect("index.php?mod=Login&&act=index");
        } else{
            if ($user->checkLogin($_POST["email"], md5($_POST["password"]))){
                $this->redirect("index.php?mod=Home&&act=index");
            }else{
                $_SESSION["errorLogin"]="Email hoặc password không đúng !";
                $this->redirect("index.php?mod=Login&&act=index");
            }
        }
    }
    public function logout(){
        unset($_SESSION["auth"]);
        $this->redirect("index.php?mod=Home&&act=index");
    }
}
