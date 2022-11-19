<?php
require_once ("../HW01/db_php30.php");
$sql="SELECT email , password from users where email='".$_POST["email"]."' and password='".md5($_POST["password"])."' ";
$status= $connn ->query($sql) ->fetch_assoc();
if (isset($status)){
    $sqlcookie="select id from users where email= '".$_POST["email"]."' ";
    $status= $connn ->query($sqlcookie) ->fetch_assoc();
    header("Location: ../HW01/index.php");
}else{
    setcookie("error_login"," Tên đăng nhập hoặc mật khẩu không đúng !" , time()+2);
    header("Location:index.php");
}

