<?php
require_once("./Model/Connection.php");

class Login
{
    private $db;

    function __construct()
    {
        $Connection = new Connection();
        $this->db = $Connection->connn;
    }

    public function loginAdmin($email, $password)
    {
        $query = "select *from users where email='" . $email . "'and password='" . $password . "' ";
        $result = $this->db->query($query)->fetch_assoc();
        return $result;
    }

}