<?php
require_once ("./Model/Categorie.php");
class CategorieController{
    public function index(){
        $model= new Categorie();
        $categories =$model->getAll();
        var_dump($categories);
        require_once ("./View/Categorie/list.php");
    }
}
