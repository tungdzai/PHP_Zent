<?php
require_once("./Model/Connection.php");

class Model
{
    public $connn;

    function __construct()
    {
        $Connection = new Connection();
        $this->connn = $Connection->connn;
    }

    public function getAll()
    {
        $mySQL = "select * from " . $this->table;
        $results = $this->connn->query($mySQL);
        $items = array();
        while ($row = $results->fetch_assoc()) {
            $items[] = $row;
        }
        return $items;
    }

    public function insertClient($name, $numberPhone, $email, $gender, $password)
    {
        $mySQL = "insert into $this->table(name,numberphone,email,gender,password) values ('" . $name . "','" . $numberPhone . "','" . $email . "','" . $gender . "','" . md5($password) . "')";
        return $this->connn->query($mySQL);
    }

    public function checkPhone($numberPhone)
    {
        $mySQL = "select numberphone from $this->table where numberphone='" . $numberPhone . "' limit 1 ";
        return $this->connn->query($mySQL)->fetch_assoc();
    }

    public function checkEmail($email)
    {
        $mySQL = "select email from $this->table where email='" . $email . "' limit 1 ";
        return $this->connn->query($mySQL)->fetch_assoc();
    }

    protected function where($where = [])
    {
        $query = "SELECT * FROM $this->table WHERE ";
        $string = "";
        $i = 0;
        foreach ($where as $column => $value) {
            $i++;
            $string .= "$column=" . "'" . $value . "'";
            if ($i != count($where)) {
                $string .= " AND ";
            }
        }
        $query .= $string;
        $result = $this->connn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function show($id)
    {
        $query = "select * from $this->table where category_id= " . $id;
        $result = $this->connn->query($query)->fetch_assoc();
        return $result;
    }

}
