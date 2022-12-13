<?php
require_once ("./Controller/BaseController.php");
require_once ("./Controller/CheckController.php");
require_once ("./Model/Detail.php");
require_once("./Model/Home.php");
require_once ("./Model/Cinema.php");
class DetailController extends CheckController
{
    public function index(){
        $model= new Detail();
        $id=$_GET["id"];
        $detail= $model->show($id);
        $modelCinema= new Cinema();
        $cinemas=$modelCinema->getAll();
        $data["cinemas"]=$cinemas;
        $data["detail"]=$detail;
        $this->view("Detail/detail.php",$data);
    }

}