<?php
session_start();
$products=$_SESSION["DataSanPham"];

$key=$_GET["id"];
$product=$products[$key];
$product["quantily"]=1;
$_SESSION["Cart"][]=$product;

header('Location:Cart.php');

?>


