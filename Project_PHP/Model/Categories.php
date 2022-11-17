<?php
session_start();
require_once("Connection.php");
class Categories
{
    public $connn;

    function __construct()
    {
        $Connection = new Connection();
        $this->connn = $Connection->connn;
    }
    public function getAll(){
        $mySQL = "select * from categories";
        $results = $this->connn ->query($mySQL);
        $categories=array();
        while ($row=$results->fetch_assoc()){
            $categories[]=$row;
        }
        return $categories;
    }

    public  function insertinto(){
        require_once ("./Controller/UploadfileController.php");
        $data = $_POST;
        if ($_FILES["thumbnail"]['name'] == '') {
            $queryThumbnail = '';
        } else {
            $uploadFile = uploadfile("thumbnail", "image", array("jpg", "png", "gif"), 1);
            $_SESSION["uploadStatus"] = $uploadFile;
            $queryThumbnail = $uploadFile[1];
        }
        if ($data["name"] != null || $data["description"] != null) {
            if ($data["submit"] == null) {
                $sql = "insert into categories(name, parent_id, thumbnail, description) VALUES ('" . $data["name"] . "','" . $data["parent_id"] . "','" . $queryThumbnail . "','" . $data["description"] . "')";
            } else {
                $id = $data["submit"];
                $sql = "update categories set name ='" . $data["name"] . "',parent_id ='" . $data["parent_id"] . "',thumbnail='" . $queryThumbnail . "',description='" . $data["description"] . "' where id=" . $id;
            }
            $status_categorie = $this->connn->query($sql);
            return $status_categorie;
        }
    }
}
