<?php
require_once("PHP&MYSQL.php");
$mySQL = "select * from blog.categories";
$results = $conn -> query($mySQL);
$categories=array();
while ($row=$results->fetch_assoc()){
    $categories[]=$row;
}
