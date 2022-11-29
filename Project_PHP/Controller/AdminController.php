<?php
require_once ("./Controller/BaseController.php");
class AdminController extends BaseController {
    public function index(){
        $this->view("Layout/admin.php");
    }
}