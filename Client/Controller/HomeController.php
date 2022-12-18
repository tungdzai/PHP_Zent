<?php
require_once ("./Controller/BaseController.php");
require_once ("./Model/Home.php");
require_once ("./lib/Format.php");
class HomeController extends BaseController
{
    public function index(){
        $model= new Home();
        $category= $model->getAll();
        $data["categories"]=$category;
        $this->view("Home/home.php",$data);
    }

}