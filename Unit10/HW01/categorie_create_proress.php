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
    if (isset($data["submit"])) {
        $id = $data["submit"];
        $sql = "update categories set name ='" . $data["name"] . "',parent_id ='" . $data["parent_id"] . "',thumbnail='" . $queryThumbnail . "',description='" . $data["description"] . "' where id=" . $id;
    } else {
        $sql = "insert into categories(name, parent_id, thumbnail, description) VALUES ('" . $data["name"] . "','" . $data["parent_id"] . "','" . $queryThumbnail . "','" . $data["description"] . "')";
    }
    $status = $connn->query($sql);
    if ($status) {
        setcookie("success",isset($data["submit"])?"Cập nhật thành công":"Thêm  mới thành công", time() + 1);
    } else {
        setcookie("error", isset($data["submit"])?"Lỗi cập nhật":"Lỗi thêm mới", time() + 1);
    }
}
header("Location:categories_form.php");


