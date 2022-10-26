<?php
session_start();

$product=$_POST;

//Lưu vào session
$_SESSION["products"][]=$product;

header('Location:product_list.php');