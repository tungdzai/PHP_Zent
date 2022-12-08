<?php
require_once ("./Controller/HomeController.php");
class BaseController{
    public function redirect($path)
    {
        header("Location:".$path);
    }

    public function view($path, $data=[])
    {
        extract($data);
        require_once "./View/".$path;
    }

}
