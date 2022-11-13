<?php
require_once ("config.php");
class  connection{
    var $connn;
    public function __construct()
    {
        $this ->connn=   new mysqli($serve_name,$user_name,$password,$dbname,$port);
        $this->conn->set_charset("utf8");
    }
}
