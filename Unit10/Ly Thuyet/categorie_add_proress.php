<?php
require_once("PHP&MYSQL.php");
if (!empty($_POST["name"]) && !empty($_POST["description"])) {
    $data = $_POST;
    $sql = "insert into blog.categories(category_name, category_description) VALUEs ('" . $data["name"] . "','" . $data["description"] . "')";
    $status = $conn->query($sql);
    if ($status = true){
        echo"ok";
    }else{
        echo "no";
    }
    header("Location:index.php");
}