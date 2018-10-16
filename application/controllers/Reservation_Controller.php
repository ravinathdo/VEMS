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
    public function loadNewReservation() {
        $this->load->model(array('Customer'));
        //get customer list
        $customer = new Customer();
        $data['custList'] = $customer->get();
        $this->load->view('staff/new_reservation', $data);
    }

    public function manageReservation() {
        $this->load->view('customer_manage_reservation');
    }

    public function loadCenterBooking() {
        //get sesion user center 
        $this->load->model(array('Booking'));
        $booking = new Booking(); 
        
        $center_id = $this->session->userdata('userbean')->center_id;
        $centerBooking = $booking->getCenterBooking($center_id);
        echo '<tt><pre>' . var_export($centerBooking, TRUE) . '</pre></tt>';

        //
    }

    public function loadCustNewReservation() {
        $this->load->model(array('Center', 'Booking'));
        $booking = new Booking();

        $center = new Center();
        $data['centerList'] = $center->get();
        $data['msg'] = '';

        $getBooking = $booking->get();
        $data['bookingList'] = $getBooking;
        $this->load->view('customer_new_reservation', $data);
    }

    public function newReservation() {
        //set resavation -> print slip
        $this->load->model(array('Booking', 'Center'));
        $booking = new Booking();
        $center = new Center();
        $data['centerList'] = $center->get();

        $array_from_post = $booking->array_from_post(array('customer_id', 'center_id', 'book_date_time'));
//        echo '<tt><pre>' . var_export($array_from_post, TRUE) . '</pre></tt>';

        $booking->book_date_time = $array_from_post['book_date_time'];
        $booking->customer_id = $array_from_post['customer_id'];
        $booking->center_id = $array_from_post['center_id'];
        $booking->status_code = 'OPEN';
        $booking->created_user = $this->session->userdata('userbean')->id;

//        echo '<tt><pre>' . var_export($booking, TRUE) . '</pre></tt>';

        $booking->save();
        $db_error = $this->db->error();
        if ($db_error['code'] == 0) {
            $data['msg'] = '<p class="text-success">New booking created successfuly : No ' . $booking->id . ' </p>';
        } else {
            $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
        }
        //load all booking to this customer
        $getBooking = $booking->get();
        $data['bookingList'] = $getBooking;
        $this->load->view('customer_new_reservation', $data);
    }

    public function loadBookingExplorer() {
        $this->load->model(array('Booking', 'Center'));
        $booking = new Booking();
        //get user by session 
        $customer_id = $this->session->userdata('userbean')->id;
        $customerBooking = $booking->getCustomerBooking($customer_id);
        $data['customerBooking'] = $customerBooking;
        $this->load->view('customer_booking_explorer', $data);
    }

}
