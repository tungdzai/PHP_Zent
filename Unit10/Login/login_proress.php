<?php
require_once("../HW01/db_php30.php");
$email=$_POST["email"];
$password=md5($_POST["password"]);
echo "<pre>";
print_r($_POST);
echo "</pre>";