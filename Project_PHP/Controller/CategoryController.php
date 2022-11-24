<?php
require_once ("./Controller/BaseController.php");
require_once ("./Model/Categories.php");
class CategoryController extends BaseController
{
    public function index()
    {
        $model= new Categories();
        $categories=$model->getAll();
        $data["categories"]=$categories;
        $this->view("Categories/category_list.php",$data);

    }
    public  function update(){
        $id=isset($_GET["id"])?$_GET["id"]:null;
        echo $id;
        die("1");
        require_once ("./View/Categories/category_form.php");
    }

}