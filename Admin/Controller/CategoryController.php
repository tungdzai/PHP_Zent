<?php
require_once("./Controller/BaseController.php");
require_once("./Model/Categories.php");
require_once("./lib/Uploadfile.php");

class CategoryController extends BaseController
{
    public function index()
    {
        $model = new Categories();
        $category = $model->pagination($_GET["page"]);
        $data["categories"] = $category;
        $this->view("Categories/category_list.php", $data);

    }

    public function store()
    {
        if (isset($_GET["id"])) {
            $model = new Categories();
            $category_show = $model->show($_GET["id"]);
            $data["category_show"] = $category_show;
            $this->view("Categories/category_form.php", $data);
        }
        $this->view("Categories/category_form.php");
    }

    public function insert()
    {
        $errorCategory = array();
        if ($_POST["name"] == null || $_POST["opening"] == null || $_FILES["thumbnail"]['name'] == '') {
            $errorCategory[] = "Name, Opening movie, Avatar không được để trống !";
            $_SESSION["errorCategory"] = $errorCategory;
            $this->redirect("index.php?mod=category&&act=store");

        } else {

            $uploadFile = new Uploadfile();
            $uploadFile = $uploadFile->fileUpload("thumbnail", "image", array("jpg", "png", "gif"), 1);
            $_SESSION["uploadStatus"] = $uploadFile;
            $queryThumbnail = $uploadFile[1];
            $check = $uploadFile[0];
            if (!$check) {
                $_SESSION["errorImage"] = $queryThumbnail;
                $this->redirect("index.php?mod=category&&act=store");
            } else {
                $model = new Categories();
                $insert = $model->insert($_POST["name"], $_POST["opening"], $queryThumbnail, $_POST["carouse"],$_POST["description"]);
                if ($insert) {
                    $errorCategory[] = "Thêm mới thành công ";
                    $_SESSION["successCategory"] = $errorCategory;
                } else {
                    $errorCategory[] = "Lỗi khi thêm mới .";
                    $_SESSION["errorCategory"] = $errorCategory;
                }
                $this->redirect("index.php?mod=category&&act=index&&page=1");
            }

        }

    }

    public function update()
    {
        $id = $_POST["submit"];
        $errorUpdate = array();
        if ($_POST["name"] == null || $_FILES["thumbnail"]['name'] == '' || $_POST["opening"] == null) {
            $errorUpdate[] = "Name, Opening movie, Avatar không được để trống !";
            $_SESSION["errorUpdate"] = $errorUpdate;
            $this->redirect("index.php?mod=category&&act=store&id=" . $id);
        } else {

            $uploadFile = new Uploadfile();
            $uploadFile = $uploadFile->fileUpload("thumbnail", "image", array("jpg", "png", "gif"), 1);
            $queryThumbnail = $uploadFile[1];
            $check = $uploadFile[0];

            var_dump($check);
            if (!$check) {
                $_SESSION["errorImage"] = $queryThumbnail;
                $this->redirect("index.php?mod=category&&act=store&id=" . $id);
            } else {
                $model = new Categories();
                $update = $model->update($id, $_POST["name"], $_POST["opening"], $queryThumbnail,$_POST["carouse"], $_POST["description"]);
                if ($update) {
                    $errorUpdate[] = "Cập nhật thành công ";
                    $_SESSION["successUpdate"] = $errorUpdate;
                } else {
                    $errorUpdate[] = "Cập nhật không thành công ! ";
                    $_SESSION["errorUpdate"] = $errorUpdate;
                }
                $this->redirect("index.php?mod=category&&act=index&&page=1");
            }

        }
    }

    public function remove()
    {
        $id = $_GET["id"];
        $statusRemove = array();
        $model = new Categories();
        $remove = $model->delete($id);
        if ($remove) {
            $statusRemove[] = "Xóa thành công ";
            $_SESSION["statusRemove"] = $statusRemove;
        } else {
            $statusRemove[] = "Lỗi khi xóa !";
            $_SESSION["statusRemove"] = $statusRemove;
        }
        $this->redirect("index.php?mod=category&&act=index&&page=1");
    }

}