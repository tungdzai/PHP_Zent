<?php
require_once("Connection.php");
class Categories
{
    public $connn;
    function __construct()
    {
        $Connection = new Connection();
        $this->connn = $Connection->connn;
    }
    // select
    public function getAll(){
        $mySQL = "select * from categories";
        $results = $this->connn ->query($mySQL);
        $categories=array();
        while ($row=$results->fetch_assoc()){
            $categories[]=$row;
        }
        return $categories;
    }

    public function insert_categorie($name,$parent_id,$thumbnail,$description){
        $query="insert into categories(name, parent_id, thumbnail, description) values ('".$name."','".$parent_id."','".$thumbnail."','".$description."')";
        $result=$this->connn->query($query);
        var_dump($result);
        return $result;
    }
}
