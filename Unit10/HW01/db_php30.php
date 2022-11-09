<?php
$serve_name= "localhost";
$user_name="root";
$password="";
$dbname="blog";
//$port=3307; Đổi cổng
$port=3306;

$conn = new mysqli($serve_name,$user_name,$password,$dbname,$port);