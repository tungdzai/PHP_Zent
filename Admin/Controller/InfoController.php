<?php
require_once("./Controller/BaseController.php");
class InfoController extends BaseController {
    public function index(){
        $this->view("Admin/infoAdmin.php");
    }
}