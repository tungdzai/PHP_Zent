<?php
$serve_name= "localhost";
$user_name="root";
$password="";
$dbname="db_php30";
$port=3307;
//$port=3306;

$connn = new mysqli($serve_name,$user_name,$password,$dbname,$port);
