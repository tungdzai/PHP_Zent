<?php
require_once("./Model/Login.php");

class LoginController
{
    function index()
    {
        require_once("./View/Login/login.php");
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $errorLogin = array();
            if (empty($email) || empty($password)) {
                $errorLogin[] = "Email và password không được để trống ! ";
            } else {
                $login = new Login();
                $logincheck = $login->loginAdmin($email, $password);
                if (!empty($logincheck)) {
                    echo "<pre>";
                    print_r($logincheck);
                    echo  "</pre>";
                } else {
                }
            }
            $_SESSION["errorLogin"]=$errorLogin;
            echo "<pre>";
            print_r($_SESSION["errorLogin"]);
            echo  "</pre>";

        }
    }
}