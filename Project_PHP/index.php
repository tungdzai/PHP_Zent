<?php
session_start();
$mod = isset($_GET["mod"])?$_GET["mod"]:"auth";
$act = isset($_GET["act"])?$_GET["act"]:"login";

//URL
const URLDASHBOARD="index.php?mod=dashboard&act=index";
const URLCATEGORY="index.php?mod=category&&act=";
const URLPOST="index.php?mod=post&&act=";
const URLUSER="index.php?mod=user&&act=";

$controller_name = ucfirst($mod) . "Controller";

$path="./Controller/" . $controller_name . ".php";

if (!file_exists($path)){
    echo "File $path không tồn tại";
    exit();
}

require_once $path;

$controller = new $controller_name();
$controller->$act();