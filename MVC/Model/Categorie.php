<?php
require_once("Connection.php");
class Categorie{
    public $connn;
    function __construct()
    {
        $Connection = new Connection();
        $this->connn = $Connection->connn;
    }
    public function getAll(){
        $mySQL = "select * from categories";
        $results = $this->connn->query($mySQL);
        $categories=array();
        while ($row=$results->fetch_assoc()){
            $categories[]=$row;
        }
        return $categories;
    }
}