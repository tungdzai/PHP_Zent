<?php
require_once ("./Controller/BaseController.php");
class NowController extends BaseController {
    public function index(){
        $this->view("NowShowing/now_showing.php");
    }
}