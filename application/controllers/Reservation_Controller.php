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
//        echo '<tt><pre>' . var_export($centerBooking, TRUE) . '</pre></tt>';
        $data['centerBooking'] = $centerBooking;
        $this->load->view('staff/bookings', $data);
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
//        echo '<tt><pre>' . var_export($customerBooking, TRUE) . '</pre></tt>';
        $this->load->view('customer/customer_booking_explorer', $data);
    }

    public function removeReservation($rid) {
        $this->load->model(array('Booking', 'Center'));
        $booking = new Booking();
        $booking->id = $rid;
        $booking->delete();
//           $db_error = $this->db->error();
//            echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';
//        if ($db_error['code'] == 0) {
//            $data['msg'] = '<p class="text-success">New registration has been successful </p>';
//        } else {
//            $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
//        }
        $data['msg'] = '<p class="bg-success msg-success">Record removed successfully</p>';
        $this->load->view('msg', $data);
    }

    public function viewReservationDetails($bid) {
        //get the inspection id from booking id
        $this->load->model(array('Booking', 'Inspection'));
        $inspection = new Inspection();
        $inspectionByBooingID = $inspection->getInspectionByBooingID($bid);
        $inspec_id = $inspectionByBooingID[0]->id;
        redirect('Payment_Controller/loadPayment/'.$inspec_id);
    }

}
