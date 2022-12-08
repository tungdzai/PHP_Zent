<?php
<<<<<<< HEAD
require_once("./Controller/BaseController.php");

class AdminController extends BaseController
{
    public function __construct()
    {
        if (!$this->checkLogin()){
            $this->redirect("index.php?mod=auth&&act=login");
        }
=======
require_once ("./Controller/CheckLoginController.php");
class AdminController extends CheckLoginController {
    public function index(){
        $this->view("Layout/admin.php");
>>>>>>> 5e286dbe85b9e5a88d06b97acbbf6dc1d32e7fde
    }

    protected function checkLogin()
    {
        if (isset($_SESSION["auth"])){
            return true;
        }else{
            return false;
        }
    }

}