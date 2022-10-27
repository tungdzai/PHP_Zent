<?php
session_start();
$key=$_GET["id"];
unset($_SESSION["Cart"][$key]);
header('Location:Cart.php');
