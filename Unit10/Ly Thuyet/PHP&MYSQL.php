<?php
$serve_name= "localhost"; // Địa chỉ IP máy chú
$user_name="root"; // Tên đăng nhập
$password="";
$dbname="blog";// Tên CSDL cần kết nối .
$port=3307;
// Tạo CSDL.
$conn = new mysqli($serve_name,$user_name,$password,$dbname,$port);

