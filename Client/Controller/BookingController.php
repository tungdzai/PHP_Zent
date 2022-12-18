<?php
require_once("./Controller/BaseController.php");
require_once("./Model/Cinema.php");
require_once ("./Model/Home.php");
class BookingController extends BaseController
{
    public function index()
    {
//        echo "<pre>";
//        print_r($_POST);
//        echo "<pre>";
//        die();
        $city= $_POST["city"];
        $this->view("Booking/booking.php");

    }

}
