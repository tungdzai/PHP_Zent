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

    public function insert($name, $opening, $thumbnail,$carouse, $description)
    {
        $query = "insert into $this->table(name,opening,thumbnail,carouse,description) values ('" . $name . "','" . $opening . "','" . $thumbnail . "','".$carouse."','" . $description . "')";
        $result = $this->connn->query($query);
        return $result;
    }

    public function insertPost($name, $opening, $thumbnail, $country,$content,$category_id,$description)
    {
        $query = "insert into $this->table(name,opening,thumbnail,country,content,category_id,description) values ('" . $name . "','" . $opening. "','" . $thumbnail . "','" . $country . "', '".$content."','".$category_id."','".$description."' )";
        $result = $this->connn->query($query);
        return $result;

    }

    public function show($id)
    {
        $query = "select * from $this->table where id= " . $id;
        $result = $this->connn->query($query)->fetch_assoc();

        return $result;

    }
    public function showCinema($site_id)
    {
        $query = "select $this->table.id ,$this->table.nameCinema ,$this->site.city from $this->table inner join $this->site on $this->table.site_id = $this->site.id where $this->table.site_id=".$site_id;
        $results = $this->connn->query($query);
        $items = array();
        while ($row = $results->fetch_assoc()) {
            $items[] = $row;
        }
        return $items;

    }

    public function update($id,$name,$opening,$queryThumbnail,$carouse,$description)
    {
        $query= "update $this->table set name ='".$name."',opening ='".$opening."',thumbnail='" . $queryThumbnail . "',carouse='".$carouse."',description='" . $description . "' where id=".$id;
        $result=$this->connn->query($query);
        return $result;
    }

    public function updatePost($id,$name,$opening,$thumbnail,$country,$content,$description)
    {
        $query= "update $this->table set name ='".$name."',opening ='".$opening."',thumbnail='" . $thumbnail . "',country='".$country."',content='" . $content. "',description='".$description."' where id=".$id;
        $result=$this->connn->query($query);
        return $result;
    }

    public function delete($id)
    {
        $query = "delete  from $this->table where id= " . $id;
        $result = $this->connn->query($query);
        return $result;
    }

    public function pagination($page){
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
        return array($table_page,$total_page, $limit,$current_page );
    }




}