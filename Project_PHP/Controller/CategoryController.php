<?php
require_once ("./Controller/BaseController.php");
require_once ("./Model/Categories.php");
require_once ("./lib/Uploadfile.php");
class CategoryController extends BaseController
{
    public function index()
    {
        $model= new Categories();
        $categories=$model->getAll();
        $data["categories"]=$categories;
        $this->view("Categories/category_list.php",$data);

    }

    public function store(){
        if (isset($_GET["id"])){
            $model= new Categories();
            $category_show=$model->showCategory($_GET["id"]);
            $data["category_show"]=$category_show;
            $this->view("Categories/category_form.php",$data);
        }
        $this->view("Categories/category_form.php");
    }
    public function insert(){
        $errorCategory = array();
        if ($_POST["name"] == null || $_POST["description"] == null) {
            $errorCategory[] = "Name và Description không được để trống !";
            $_SESSION["errorCategory"] = $errorCategory;
            $this->redirect("index.php?mod=category&&act=store");

        } else {
            if ($_FILES["thumbnail"]['name'] == '') {
                $queryThumbnail = '';
            } else {
                $uploadFile= new Uploadfile();
                $uploadFile =$uploadFile->fileUpload("thumbnail", "image", array("jpg", "png", "gif"), 1) ;
                $_SESSION["uploadStatus"] = $uploadFile;
                $queryThumbnail = $uploadFile[1];
            }
            $model= new Categories();
            $insert=$model->insert($_POST["name"],$_POST["parent_id"], $queryThumbnail,$_POST["description"]);
            if ($insert){
                $errorCategory[] = "Thêm mới thành công ";
                $_SESSION["successCategory"] = $errorCategory;
                $this->redirect("index.php?mod=category&&act=index");
            }else{
                $errorCategory[] = "Lỗi khi thêm mới .";
                $_SESSION["errorCategory"] = $errorCategory;
                $this->redirect("index.php?mod=category&&act=index");

            }
        }

    }
    public  function update(){
        $id=$_POST["submit"];
        $errorUpdate = array();
        if ($_POST["name"] == null || $_POST["description"] == null) {
            $errorUpdate[] = "Name và Description không được để trống !";
            $_SESSION["errorCategory"] = $errorUpdate;
            $this->redirect("index.php?mod=category&&act=store");

        } else {
        }
    }

    public function remove(){
        $id=$_GET["id"];
        $statusRemove = array();
        $model= new Categories();
        $remove=$model->delete($id);
        if ($remove){
            $statusRemove[]="Xóa thành công ";
            $_SESSION["statusRemove"] = $statusRemove;
        }else{
            $statusRemove[]="Lỗi khi xóa !";
            $_SESSION["statusRemove"] = $statusRemove;
        }
        $this->redirect("index.php?mod=category&&act=index");
    }

}