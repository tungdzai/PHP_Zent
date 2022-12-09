<?php
require_once ("./Controller/BaseController.php");
require_once ("./View/Auth/login.php");
require_once ("./Model/User.php");
class AuthController extends BaseController {
    public function login(){
        $this->view("Auth/login.php");
    }
    public function handleLogin(){
        if (empty($_POST["email"]) || empty($_POST["password"])){
            $_SESSION["errorLogin"]="Email và password không được để trống !";
        }else{
            $user= new User();
            if ($user->checkLogin($_POST["email"], $_POST["password"])){
                $this->redirect("index.php?mod=Admin&&act=index");
            }else{
                $_SESSION["errorLogin"]="Email hoặc password không đúng !";

                $this->redirect("index.php?mod=auth&&act=login");
            }
        }
    }
    public function logout(){
        unset($_SESSION["auth"]);
        $this->redirect("index.php?mod=auth&&act=login");
    }

}