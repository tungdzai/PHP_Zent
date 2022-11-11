<?php
require_once ("db_php30.php");
$id=isset($_GET["id"])?$_GET["id"]:0;
$query = "delete  from posts where id=" . $id;
$result = $connn->query($query);
header("Location:post.php");
