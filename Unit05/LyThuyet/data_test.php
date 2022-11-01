<?php
session_start();
$user=$_POST["user"];
$pass=$_POST["pwd"];
$checked= check($user,$pass);
if ($checked){
    $_SESSION["Login"]=true;
    setcookie("msg","Đăng nhập thành công",time()+60);
    echo "<br/.>".$_COOKIE["msg"];
}else{
    setcookie("msg","Đăng nhập thất bại",time()+60);
    echo "<br/.>".$_COOKIE["msg"];
}


function check($username, $pwd){
    $users =array();
    $users[]=[
        "username" => "tung",
        "pwd" =>"123"
    ];
    $users[]=[
        "username" => "123",
        "pwd" =>"123"
    ];
    $users[]=[
        "username" => "tung",
        "pwd" =>"123"
    ];
    foreach ($users as $key => $user) {
        if ($user["username"] == $username && $user["pwd"] == $pwd ){
            return true;
        }
    }
    return false;
}

?>