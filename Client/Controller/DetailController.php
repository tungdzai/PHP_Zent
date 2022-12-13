<?php
require_once ("./Controller/BaseController.php");
require_once ("./Model/Detail.php");
require_once("./Model/Home.php");
class DetailController extends BaseController
{
    public function index(){
        $id=$_GET["id"];
        $model= new Detail();
        $detail= $model->show($id);
        $data["detail"]=$detail;
        $this->view("Detail/detail.php",$data);
    }

}