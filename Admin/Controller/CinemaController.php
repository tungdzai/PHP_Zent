<?php
require_once ("./Controller/BaseController.php");
require_once ("./Model/Cinemas.php");
class CinemaController extends BaseController {
    public function index(){
        $model= new Cinemas();
        $cinemas=$model->showCinema($_GET["id"]);
        $data["cinemas"]=$cinemas;
        $this->view("Cinema/cinema_list.php",$data);
    }
    public function remove()
    {
        $id = $_GET["id"];
        $model = new Cinemas();
        $remove = $model->delete($id);
        $this->redirect("index.php?mod=cinema&&act=index&&page=1");
    }
}
