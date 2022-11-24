<?php
require_once("./Controller/CategoryController.php");
require_once("./Model/Categories.php");

class BaseController
{
    public function redirect()
    {

    }

    public function view($path, $data)
    {
        extract($data);
        require_once "./View/".$path;
    }
}