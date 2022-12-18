<?php
require_once ("./Controller/BaseController.php");
require_once ("./Model/Site.php");
class SiteController extends BaseController {
    public function index(){
        $model= new Site();
        $sites=$model->getAll();
        $data["sites"]=$sites;
        $this->view("Site/Site.php",$data);
    }
}