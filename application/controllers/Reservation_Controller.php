<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reservation_Controller
 *
 * @author ravi
 */
class Reservation_Controller extends CI_Controller {
    //put your code here
    public function newReservation() {
        $this->load->view('customer_new_reservation');
    }
    public function manageReservation() {
        $this->load->view('customer_manage_reservation');
    }
}
