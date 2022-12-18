<?php
require_once ("./Controller/BaseController.php");
class CheckController extends BaseController {
    public function __construct()
    {
        if (!$this->checkLogin()){
            $this->redirect("index.php?mod=Login&&act=index");
        }
    }

    public function checkLogin(){
        if (isset($_SESSION["auth"])){
            return true;
        }else{
            return false;
        }
    }
}
