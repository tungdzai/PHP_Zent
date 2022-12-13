<?php
require_once("./Controller/BaseController.php");
require_once("./Model/Posts.php");
require_once("./Model/Categories.php");
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
        $modelCategory = new Categories();
        $list_phim = $modelCategory->getAll();
        $data["list_phim"]=$list_phim;
        $this->view("Posts/post_form.php",$data);
    }

    public function insert()
    {
        $errorsPost= array();
        $statusPost=true;
        if ($_POST["category_id"] == 0  ){
            $errorsPost["category_id"]="Phim không được để trống !";
            $statusPost=false;
        }
        if (empty($_POST["country"])){
            $errorsPost["country"]="Quốc gia không được để trống !";
            $statusPost=false;
        }
        if (empty($_POST["content"])){
            $errorsPost["content"]="Nội dung không được để trống !";
            $statusPost=false;
        }
        if ($statusPost){
            $model = new Categories();
            $category=$model->show($_POST["category_id"]);
            $name=$category["name"];
            $opening=$category["opening"];
            $thumbnail=$category["thumbnail"];
            $description=$category["description"];
            $modelPost= new Posts();
            $post= $modelPost->insertPost($name,$opening,$thumbnail,$_POST["country"],$_POST["content"],$_POST["category_id"],$description);
            if ($post){
                $_SESSION["successPost"]="Thêm mới chi tiết phim thành công";
                $this->redirect("index.php?mod=post&&act=index&&page=1");
            }
        }else{
            $_SESSION["errorsPost"]= $errorsPost;
            $this->redirect("index.php?mod=post&&act=store");
        }
    }

    public function update()
    {
        $id=$_POST["submit"];
        $errorsUpdate=array();
        $statusUpdate=true;
        if (empty($_POST["country"])){
            $errorsUpdate["country"]="Quốc gia không được để trống !";
            $statusUpdate=false;
        }
        if (empty($_POST["content"])){
            $errorsUpdate["content"]="Nội dung không được để trống !";
            $statusUpdate=false;
        }
        if ($statusUpdate){
            $model = new Categories();
            $category=$model->show($_POST["category_id"]);
            $name=$category["name"];
            $opening=$category["opening"];
            $thumbnail=$category["thumbnail"];
            $description=$category["description"];

            $modelUpdate= new Posts();
            $update= $modelUpdate->updatePost($id,$name,$opening,$thumbnail,$_POST["country"],$_POST["content"],$description);
            if ($update){
                $this->redirect("index.php?mod=post&&act=index&&page=1");
            }
        }else{
            $_SESSION["errorsUpdate"]= $errorsUpdate;
            $this->redirect("index.php?mod=post&&act=store&id=".$id);
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