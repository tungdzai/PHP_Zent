<?php
$mod = isset($_GET["mod"])?$_GET["mod"]:"login";
$act = isset($_GET["act"])?$_GET["act"]:"index";

//URL
const URLADMIN="index.php?mod=Admin&&act=index";
const URLCATEGORY="index.php?mod=category&&act=index";
const URLPOST="index.php?mod=post&&act=index";
const URLUSER="index.php?mod=user&&act=index";
const URLUPDATE="index.php?mod=category&&act=update";





$controller_name = ucfirst($mod) . "Controller";
$path=__DIR__."/Controller/" . $controller_name . ".php";
if (!file_exists($path)){
    echo "File $path không tồn tại";
    exit();
}
require_once $path;

$controller = new $controller_name();
$controller->$act();