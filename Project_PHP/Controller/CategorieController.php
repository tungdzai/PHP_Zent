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
    public function insert($data){
        $model= new Categories();
        $status_categorie=$model->insertinto();
        if ($status_categorie) {
            setcookie("success",$data["submit"] == null ?"Thêm  mới thành công":"Cập nhật thành công", time() + 1);
        } else {
            setcookie("error", $data["submit"] == null ?"Lỗi thêm mới":"Lỗi cập nhật", time() + 1);
        }
        require_once("./View/Categories/categories_form.php");
    }
}