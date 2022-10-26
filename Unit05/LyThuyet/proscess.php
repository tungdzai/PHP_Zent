<?php
//if (isset($_GET["user"]) && isset($_GET["passworld"])) {
//    echo "<pre>";
//    print_r($_GET);
//    echo "</pre>";
//}
$user = "";
$password = "";
//lấy dữ liệu từ post
if (isset($_POST["user"])) {
    $user = $_POST["user"];
}
if (isset($_POST["passworld"])) {
    $password = $_POST["passworld"];
}

if ($user != "" && $password !=""){
    echo "Login thành công";
}else{
    echo "Login thất bại >.<";
}
