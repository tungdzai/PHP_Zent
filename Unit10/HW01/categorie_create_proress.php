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
if ($data["name"] != null && $data["description"] != null) {
    $sql = "insert into database_php.categories(name, parent_id, thumbnail, description) VALUES ('" . $data["name"] . "','" . $data["parent_id"] . "','" . $queryThumbnail . "','" . $data["description"] . "')";
    $status = $connn->query($sql);
}
header("Location:categories_form.php");


