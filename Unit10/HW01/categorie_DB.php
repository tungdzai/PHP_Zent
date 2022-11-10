<?php
require_once("db_php30.php");
$mySQL = "select * from database_php.categories";
$results = $connn ->query($mySQL);
$categories=array();
while ($row=$results->fetch_assoc()){
    $categories[]=$row;
}
