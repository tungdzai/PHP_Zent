<?php
require_once ("./Controller/BaseController.php");
class HomeController extends BaseController
{
    public function index(){
        $this->view("Home/home.php");
    }

}