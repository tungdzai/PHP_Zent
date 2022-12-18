<?php
require_once ("./Controller/BaseController.php");
require_once ("./Model/Site.php");
class SiteController extends BaseController {
    public function index(){
        $model = new Site();
        $sites = $model->pagination($_GET["page"]);
        $data["sites"] = $sites;
        $this->view("Site/site_list.php",$data);
    }
    public function remove()
    {
        $id = $_GET["id"];
        $model = new Site();
        $remove = $model->delete($id);
        $this->redirect("index.php?mod=cinema&&act=index&&page=1");
    }
}
