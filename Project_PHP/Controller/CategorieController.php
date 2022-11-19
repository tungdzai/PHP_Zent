<?php
require_once ("./Model/Categories.php");
class CategorieController
{
    public function index()
    {
        $model= new Categories();
        $categories=$model->getAll();
        require_once("./View/Categories/categories_form.php");
    }
    public function insert(){
        if ($_SERVER["REQUEST_METHOD"] === "POST"){
            $name=$_POST["name"];
            $parent_id=$_POST["parent_id"];
            $description=$_POST["description"];
            $thumbnail="";

            $model= new Categories();
            $insert_categori=$model->insert_categorie($name,$parent_id,$thumbnail,$description);
            if ($insert_categori){
                $this->index();
            }


        }
    }
}