<?php
session_start();
require_once("uploadFile.php");
require_once("db_php30.php");
$data = $_POST;
if ($_FILES["thumbnail"]["name"] == "") {
    $queryThumbnail = "";
} else {
    $uploadFile = fileUpload("thumbnail", "image", array("jpg", "png", "gif"), 1);
    $_SESSION["uploadStatus"] = $uploadFile;
    $queryThumbnail = $uploadFile[1];
}
$error_Post = array();
if ($data["title"] == null || $data["description"] == null) {
    $error_Post[] = "Trường thông tin title và description không được để trống !";
    $_SESSION["error_post"] = $error_Post;
    header("Location:post_add.php");
} else {
    if ($data["submit"] == 0) {
        $sql = "insert into posts (title, description, thumbnail , content,category_id) VALUES ('" . $data["title"] . "','" . $data["description"] . "','" . $queryThumbnail . "','" . $data["content"] . "','" . $data["category_id"] . "')";
    } else {
        $idupdate = $data["submit"];
        $sql = "update posts set title='" . $data["title"] . "' , description='" . $data["description"] . "',thumbnail='" . $queryThumbnail . "',content='" . $data["content"] . "' where id=" . $idupdate;
    }
    $status = $connn->query($sql);
    if ($data["submit"] == 0){
        $status ?  setcookie("success", "Thêm mới thành công", time() + 2): setcookie("error", "Lỗi thêm mới", time() + 5);
        header("Location:post.php");
    }else{
        $status ?  setcookie("success", "Cập nhật  thành công", time() + 2): setcookie("error", "Lỗi cập nhật", time() + 5);
        header("Location:post.php");
    }


}

