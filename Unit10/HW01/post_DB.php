<?php
require_once("db_php30.php");
$mySQL = "select * from posts";
$results = $connn ->query($mySQL);
$posts=array();
while ($row=$results->fetch_assoc()){
    $posts[]=$row;
}