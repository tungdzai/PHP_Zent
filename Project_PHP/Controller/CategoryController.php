<?php
require_once("./Controller/AdminController.php");
require_once("./Model/Categories.php");
require_once("./lib/Uploadfile.php");

class CategoryController extends AdminController
{

    public function index()
    {

        $model = new Categories();
//        $categories=$model->getAll();
//        $data["categories"]=$categories;
//        $this->view("Categories/category_list.php",$data);
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
        if ($_POST["name"] == null || $_POST["description"] == null) {
            $errorCategory[] = "Name và Description không được để trống !";
            $_SESSION["errorCategory"] = $errorCategory;
            $this->redirect("index.php?mod=category&&act=store");

        } else {
            if ($_FILES["thumbnail"]['name'] == '') {
                $queryThumbnail = '';
            } else {
                $uploadFile = new Uploadfile();
                $uploadFile = $uploadFile->fileUpload("thumbnail", "image", array("jpg", "png", "gif"), 1);
                $_SESSION["uploadStatus"] = $uploadFile;
                $queryThumbnail = $uploadFile[1];
                $check=$uploadFile[0];
            }
            if (!$check) {
                $_SESSION["errorImage"] = $queryThumbnail;
                $this->redirect("index.php?mod=category&&act=store");
            } else {
                $model = new Categories();
                $insert = $model->insert($_POST["name"], $_POST["parent_id"], $queryThumbnail, $_POST["description"]);
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
        if ($_POST["name"] == null || $_POST["description"] == null) {
            $errorUpdate[] = "Name và Description không được để trống !";
            $_SESSION["errorUpdate"] = $errorUpdate;
            $this->redirect("index.php?mod=category&&act=store&id=" . $id);
        } else {
            if ($_FILES["thumbnail"]['name'] == '') {
                $queryThumbnail = '';
            } else {
                $uploadFile = new Uploadfile();
                $uploadFile = $uploadFile->fileUpload("thumbnail", "image", array("jpg", "png", "gif"), 1);
                $queryThumbnail = $uploadFile[1];
            }
            if (!!$_SESSION["uploadStatus"][0]) {
                $_SESSION["errorImage"] = $queryThumbnail;
                $this->redirect("index.php?mod=category&&act=store&id=" . $id);
            } else {
                $model = new Categories();
                $update = $model->update($id, $_POST["name"], $_POST["parent_id"], $queryThumbnail, $_POST["description"]);
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