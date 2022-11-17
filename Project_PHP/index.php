<?php
$mod = $_GET["mod"];
$act = $_GET["act"];

$controller_name = ucfirst($mod) . "Controller";
require_once "./Controller/" . $controller_name . ".php";

$controller = new $controller_name();
$controller->$act();