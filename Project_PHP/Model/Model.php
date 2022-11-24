<?php
require_once("./Model/Connection.php");
class Model{
    public $connn;
    function __construct()
    {
        $Connection = new Connection();
        $this->connn = $Connection->connn;
    }
    public function getAll(){
        $mySQL = "select * from ".$this->table;
        $results = $this->connn ->query($mySQL);
        $items=array();
        while ($row=$results->fetch_assoc()){
            $items[]=$row;
        }
        return $items;
    }
    public function update(){

    }
}