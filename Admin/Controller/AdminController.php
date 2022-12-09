<?php
require_once ("./Controller/CheckLoginController.php");
class AdminController extends CheckLoginController {
    public function index(){
        $this->view("Layout/admin.php");
    }
}