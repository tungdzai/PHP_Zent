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

    public function insert($name, $parent_id, $thumbnail, $description)
    {
        $query = "insert into $this->table(name,parent_id,thumbnail,description) values ('" . $name . "','" . $parent_id . "','" . $thumbnail . "','" . $description . "')";
        $result = $this->connn->query($query);
        return $result;
    }

    public function show($id)
    {
        $query = "select * from $this->table where id= " . $id;
        $result = $this->connn->query($query)->fetch_assoc();

        return $result;

    }

    public function update($id,$name,$parent_id,$queryThumbnail,$description)
    {
        $query= "update $this->table set name ='".$name."',parent_id ='".$parent_id."',thumbnail='" . $queryThumbnail . "',description='" . $description . "' where id=".$id;
        $result=$this->connn->query($query);
        return $result;
    }

    public function delete($id)
    {
        $query = "delete  from $this->table where id= " . $id;
        $result = $this->connn->query($query);
        return $result;
    }


}