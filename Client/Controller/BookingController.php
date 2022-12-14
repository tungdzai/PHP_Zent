<?php
require_once("./Controller/BaseController.php");
require_once("./Model/Cinema.php");
class BookingController extends BaseController
{
    public function index()
    {
//        echo "<pre>";
//        print_r($_POST);
//        echo "<pre>";
//        die();
        $id_cinema = $_POST["cinema"];
        $model = new  Cinema();
        $cinema = $model->showCreate($id_cinema);
        $data["cinema"]= $cinema;
        $this->view("Booking/booking.php",$data);

    }

}
