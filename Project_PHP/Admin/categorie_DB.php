<?php
require_once("db_php30.php");
$mySQL = "select * from categories";
$results = $connn ->query($mySQL);
$categories=array();
while ($row=$results->fetch_assoc()){
    $categories[]=$row;
}
