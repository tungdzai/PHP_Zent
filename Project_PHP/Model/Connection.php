<?php
class  Connection
{
    var $connn;
    private $serve_name = "localhost";
    private $user_name = "root";
    private $password = "";
    private $dbname = "db_php30";
    private $port = 3307;
    public function __construct()
    {
        $this->connn = new mysqli($this->serve_name, $this->user_name, $this->password, $this->dbname, $this->port);
        $this->connn->set_charset("utf8");
    }
}
