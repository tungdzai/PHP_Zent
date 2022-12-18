<?php
require_once("./Model/Model.php");

class UsersClient extends Model
{
    public $table = "usersclient";

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
        } else {
            return false;
        }
    }
}