<?php
require_once("./Model/Model.php");

class User extends Model
{
    public $table = "users";

    public function checkLogin($email, $password)
    {
        $users = $this->where(['email' => $email, 'password' => $password]);
        $user = $users[0];
        if (count($users) > 0) {
            $_SESSION["auth"] = [
                "id" => $user["id"],
                "name" => $user["name"]

            ];
            return true;
        }else{
            return false;
        }
    }

}