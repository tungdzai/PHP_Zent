<?php
$mod=$_GET["mod"];
$act=$_GET["act"];
//http://localhost/PHP_Zent/MVC/index.php?mod=post&&act=index
$controller_name=ucfirst($mod)."Controller";
require_once "./Controller/".$controller_name.".php";
$controller= new $controller_name();
$controller ->$act();

