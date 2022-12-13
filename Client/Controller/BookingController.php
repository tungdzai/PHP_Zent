<?php
require_once ("./Controller/BaseController.php");
class BookingController extends BaseController {
    public function index(){
        $this->view("Booking/booking.php");

    }

}
