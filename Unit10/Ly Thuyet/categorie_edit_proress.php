<?php
require_once("PHP&MYSQL.php");
$id = isset($_GET["id"]) ? $_GET["id"] : 0;
if ($id != 0) {
    $data = $_POST;
    $sql = "update categories set category_name='".$_POST["category_name"]."',category_description='".$_POST["category_description"]."' where id= ".$id."  ";
    $status = $conn->query($sql);
    if ($status = true){
        echo"ok";
    }else{
        echo "no";
    }
}
header("Location:index.php");
