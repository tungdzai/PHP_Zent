<?php
$mod = isset($_GET["mod"])?$_GET["mod"]:"login";
$act = isset($_GET["act"])?$_GET["act"]:"index";
$controller_name = ucfirst($mod) . "Controller";
require_once "./Controller/" . $controller_name . ".php";

$controller = new $controller_name();
$controller->$act();