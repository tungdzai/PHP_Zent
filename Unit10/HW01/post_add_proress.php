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
    $sql = "insert into posts (title, description, thumbnail , content,category_id) VALUES ('" . $data["title"] . "','" . $data["description"] . "','" . $queryThumbnail . "','" . $data["content"] . "','" . $data["category_id"] . "')";
    $status = $connn->query($sql);
    if ($status) {
        setcookie("success", "Thêm mới thành công", time() + 2);
    } else {
        setcookie("error", "Lỗi thêm mới", time() + 5);
    }
    header("Location:post.php");

}

