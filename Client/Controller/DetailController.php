<?php
require_once("./Controller/BaseController.php");
require_once("./Controller/CheckController.php");
require_once("./Model/Detail.php");
require_once("./Model/Home.php");
require_once("./Model/Cinema.php");

class DetailController extends CheckController
{
    public function index()
    {
        $model = new Detail();
        $id = $_GET["id"];
        $detail = $model->show($id);
        $data["detail"] = $detail;
        $modelCinema = new Cinema();
        $sites = $modelCinema->showSite();
        $data["sites"] = $sites;
        $this->view("Detail/detail.php", $data);
    }

}