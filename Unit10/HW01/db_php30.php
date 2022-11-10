<?php
$serve_name= "localhost";
$user_name="root";
$password="";
$dbname="database_php";
//$port=3307; Đổi cổng
$port=3306;

$connn = new mysqli($serve_name,$user_name,$password,$dbname,$port);