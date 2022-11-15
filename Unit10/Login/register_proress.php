<?php
session_start();
require_once("../HW01/db_php30.php");
function checkregister($name, $email, $password, $confirm)
{
    $statusRegister = true;
    $errors_register = array();

    // Kiểm tra tên
    if (empty($name)) {
        $errors_register["notname"] = "Tên không được để trống .";
        $statusRegister = false;
    }
    if (strlen($name) < 4) {
        $errors_register["name"] = "Tên lớn hơn 4 kí tự .";
        $statusRegister = false;
    }
    // check email
    if (empty($email)) {
        $errors_register["email"] = "Email không được để trống .";
        $statusRegister = false;
    }

    // check passworld
    if (empty($password) && empty($confirm)) {
        $errors_register["password"] = "Mật khẩu không được để trống .";
        $statusRegister = false;
    }
    if (strcmp($password, $confirm) != 0) {
        $errors_register["confirm"] = "Mật khẩu không trùng khớp";
        $statusRegister = false;
    }

    if ($statusRegister) {
        return array(true, "INSERT INTO users ( name, email, password) VALUES ('" . $name . "','" . $email . "','" . md5($password) . "')");
    } else {
        return array(false, $errors_register);
    }
}

$data_register = checkregister($_POST["name"], $_POST["email"], $_POST["password"], $_POST["confirm"]);
if ($data_register[0] == true) {
    $sql = $data_register[1];
    $status = $connn->query($sql);
    if ($status){
        setcookie("successRigister","Đăng ký thành công .",time()+1);
    }else{
        setcookie("errorRigister","Lỗi đăng ký !",time()+1);
    }
    header("Location:index.php");

} else {
    $_SESSION["status_register"] = $data_register;
    header("Location:register.php");
}


