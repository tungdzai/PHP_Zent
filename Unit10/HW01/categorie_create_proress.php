<?php
session_start();
require_once("db_php30.php");
require_once("uploadFile.php");
$data = $_POST;
if ($_FILES["thumbnail"]['name'] == '') {
    $queryThumbnail = '';
} else {
    $uploadFile = fileUpload("thumbnail", "image", array("jpg", "png", "gif"), 1);
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
    $status_categorie = $connn->query($sql);
    if ($status_categorie) {
        setcookie("success",$data["submit"] == null ?"Thêm  mới thành công":"Cập nhật thành công", time() + 1);
    } else {
        setcookie("error", $data["submit"] == null ?"Lỗi thêm mới":"Lỗi cập nhật", time() + 1);
    }
}
header("Location:category_form.php");


