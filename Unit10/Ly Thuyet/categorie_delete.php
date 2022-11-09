<?php
require_once ("PHP&MYSQL.php");
$id=isset($_GET["id"])?$_GET["id"]:0;
if ($id != 0){
    $sql="delete from blog.categories where id=$id";
    $status = $conn ->query($sql);
}
header("Location:index.php");
