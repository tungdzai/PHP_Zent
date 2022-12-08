<?php
require_once("./Controller/BaseController.php");
require_once("./Model/Posts.php");
require_once("./lib/Uploadfile.php");

class PostController extends BaseController
{
    public function index()
    {
        $model = new Posts();
        $post = $model->pagination($_GET["page"]);
        $data["posts"] = $post;
        $this->view("Posts/post_list.php", $data);

    }

    public function store()
    {
        if (isset($_GET["id"])) {
            $model = new Posts();
            $post_show = $model->show($_GET["id"]);
            $data["post_show"] = $post_show;
            $this->view("Posts/post_form.php", $data);
        }
        $this->view("Posts/post_form.php");
    }

    public function insert()
    {
        $errorPost = array();
        if ($_POST["title"] == null || $_POST["description"] == null || $_FILES["thumbnail"]['name'] == '') {
            $errorPost[] = "Title , Description ,Avatar không được để trống !";
            $_SESSION["errorPost"] = $errorPost;
            $this->redirect("index.php?mod=post&&act=store");

        } else {
            $uploadFile = new Uploadfile();
            $uploadFile = $uploadFile->fileUpload("thumbnail", "image", array("jpg", "png", "gif"), 1);
            $_SESSION["uploadStatus"] = $uploadFile;
            $queryThumbnail = $uploadFile[1];
            $check = $uploadFile[0];

            if (!$check) {
                $_SESSION["errorImage"] = $queryThumbnail;
                $this->redirect("index.php?mod=post&&act=store");
            } else {
                $model = new Posts();
                $insertPost= $model->insertPost($_POST["title"], $_POST["description"], $queryThumbnail, $_POST["content"]);
                if ($insertPost) {
                    $errorPost[] = "Thêm mới thành công ";
                    $_SESSION["successPost"] = $errorPost;
                } else {
                    $errorPost[] = "Lỗi khi thêm mới .";
                    $_SESSION["errorPost"] = $errorPost;
                }
                $this->redirect("index.php?mod=post&&act=index&&page=1");
            }

        }

    }
    public function remove()
    {
        $id = $_GET["id"];
        $statusRemove = array();
        $model = new Posts();
        $remove = $model->delete($id);
        if ($remove) {
            $statusRemove[] = "Xóa thành công ";
            $_SESSION["statusRemove"] = $statusRemove;
        } else {
            $statusRemove[] = "Lỗi khi xóa !";
            $_SESSION["statusRemove"] = $statusRemove;
        }
        $this->redirect("index.php?mod=post&&act=index&&page=1");
    }
}