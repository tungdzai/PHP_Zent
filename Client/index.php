<?php
session_start();
$mod = isset($_GET["mod"])?$_GET["mod"]:"home";
$act = isset($_GET["act"])?$_GET["act"]:"index";

// URL
const  URLLOGIN="index.php?mod=Login&&act=";
const  URLCREATE="index.php?mod=Create&&act=";


$controller_name = ucfirst($mod) . "Controller";
$path=__DIR__."/Controller/" . $controller_name . ".php";
if (!file_exists($path)){
    echo "File $path không tồn tại";
    exit();
}
require_once $path;

$controller = new $controller_name();
$controller->$act();