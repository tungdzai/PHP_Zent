<?php
session_start();
require_once ("../HW01/db_php30.php");
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
        $sql = "INSERT INTO users ( name, email, password) VALUES ('" . $name . "','" . $email . "','" . $password . "')";
        $statuscheck=$connn ->query($sql);
        if ($statuscheck){

        }
    } else {
        return array(false, $errors_register);
    }
}

$data_register = checkregister($_POST["name"], $_POST["email"], $_POST["password"], $_POST["confirm"]);
$_SESSION["status_register"] = $data_register;
header("Location:register.php");
echo "<pre>";
print_r($_SESSION["status_register"]);
echo "</pre>";


