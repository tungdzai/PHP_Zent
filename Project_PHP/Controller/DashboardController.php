<?php
require_once ("./Controller/AdminController.php");
require_once ("./Controller/BaseController.php");
class DashboardController extends BaseController
{
    public function index()
    {
        var_dump(1);
        die();
        $this->view("Layout/admin.php");
    }

}