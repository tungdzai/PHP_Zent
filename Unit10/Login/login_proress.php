<?php
require_once ("../HW01/db_php30.php");
$data_login=$_POST;
$email=$_POST["email"];
$password=$_POST["password"];
require_once("../HW01/db_php30.php");
$email=$_POST["email"];
$password=md5($_POST["password"]);

