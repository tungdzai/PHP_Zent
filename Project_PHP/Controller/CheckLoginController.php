<?php
require_once ("./Controller/BaseController.php");
class CheckLoginController extends BaseController {
    public function __construct()
    {
        if (!$this->checkLogin()){
            $this->redirect("index.php?mod=auth&&act=login");
        }
    }
    protected function checkLogin(): bool
    {
        if (isset($_SESSION["auth"])){
            return true;
        }else{
            return false;
        }
    }
}