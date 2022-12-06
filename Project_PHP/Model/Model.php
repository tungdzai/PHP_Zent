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

    public function update($id, $name, $parent_id, $queryThumbnail, $description)
    {
        $query = "update $this->table set name ='" . $name . "',parent_id ='" . $parent_id . "',thumbnail='" . $queryThumbnail . "',description='" . $description . "' where id=" . $id;
        $result = $this->connn->query($query);
        return $result;
    }

    public function delete($id)
    {
        $query = "delete  from $this->table where id= " . $id;
        $result = $this->connn->query($query);
        return $result;
    }

    public function pagination($page): array
    {
        $sql = "select count(id) as total from $this->table";
        $total_records = $this->connn->query($sql)->fetch_assoc();
        $current_page = $page ?? 1; //Trang hiện tại
        $limit = 5;
        $total_page = ceil($total_records["total"] / $limit); // Tổng trang
        $start = ($current_page - 1) * $limit;
        $result = mysqli_query($this->connn, "SELECT * FROM $this->table LIMIT $start, $limit");
        $table_page = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $table_page[] = $row;
        }
        return array($table_page, $total_page, $limit, $current_page);
    }

    public function search($key): array
    {
        $query = "select * from $this->table where name like '%{$key}%' ";
        $results = $this->connn->query($query);
        $searchList= array();
        while ($row = $results->fetch_assoc()) {
            $searchList[] = $row;
        }
        return $searchList;
    }


}