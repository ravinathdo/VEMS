<?php

/**
 * Description of Inspection
 *
 * @author ravi
 */
class Inspection_Controller extends CI_Controller {

    //put your code here

    public function loadInspection($vehicle_id, $reg_no, $booking_id = 0) {
        //get the vehicle infoemation 
        $data['reg_no'] = $reg_no;
        $data['vehicle_id'] = $vehicle_id;
        $data['booking_id'] = $booking_id;
        $this->load->view('staff/operator_vehicle_inspection', $data);
    }

    public function inspection() {
        $this->load->model(array('Inspection', 'Booking'));
        $inspection = new Inspection();
        $inspection->getPostData();

        //set created user from session 
        $inspection->created_user = $this->session->userdata('userbean')->id;
        $inspection->center_id = $this->session->userdata('userbean')->center_id;

//        echo '<tt><pre>' . var_export($inspection, TRUE) . '</pre></tt>';
        $inspection->save();
        $db_error = $this->db->error();
//            echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';
        if ($db_error['code'] == 0) {
//            $data['msg'] = '<p class="text-success">New registration has been successful </p>';
            //new inspection created ID: 5 
            //load inspection explorer according to center user session
            $userbean = $this->session->userdata('userbean');
            if ($userbean->role_code == 'STAFF') {
//                echo 'In STAFF';
                $get = $inspection->getCenterInspectionList($userbean->center_id);
            } else {
//                echo 'OUT STAFF';
                $get = $inspection->get();
            }
            //update booking status_code = 'DONE'
            $booking0 = new Booking();
            $updateArray = array('status_code' => 'DONE');
            $booking0->update_booking($updateArray, $inspection->booking_id);

//        echo '<tt><pre>' . var_export($get, TRUE) . '</pre></tt>';
            $data['inspectionList'] = $get;
            $data['msg'] = '<p class="bg-success msg-success">New Inspection created [ Token No:' . $inspection->id . ']</p>';
        } else {
            $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
        }


        $this->load->view('staff/operator_list_inspection', $data);
    }

    public function loadInspectionExplorer() {
        $this->load->model(array('Inspection'));
        $inspection = new Inspection();
        $data['msg'] = '';
        $get = $inspection->get();
        $data['inspectionList'] = $get;
        $this->load->view('operator_list_inspection', $data);
    }

    public function result() {
        $this->load->view('operator_vehicle_result');
    }

    /**
     * Start for inspection the booking which placed by customer
     * @param type $param
     */
    public function loadinitInspectionForBooking($bookng_id) {
        $this->load->model(array('Booking', 'Vehicle'));
        $booking = new Booking();
        $bookingDetails = $booking->getBookingDetails($bookng_id);
//        echo '<tt><pre>' . var_export($bookingDetails, TRUE) . '</pre></tt>';
//        $data['msg'] = '';
        //get the customer vehicle list into session 
        $vehicle = new Vehicle();
        $customerVehicleList = $vehicle->getCustomerVehicles($bookingDetails[0]->customer_id);
        $data['bookingDetails'] = $bookingDetails;
        $data['customerVehicleList'] = $customerVehicleList;
//        $this->session->set_userdata(array('customerVehicleList'=>$customerVehicles));
        $this->load->view('staff/init_inspection', $data);
    }

    public function rejectBooking($booking_id) {
        
    }

    public function getCenterInspectionList() {

        $this->load->model(array('Inspection'));
        $inspection = new Inspection();
        $data['msg'] = '';

        $userbean = $this->session->userdata('userbean');
        if ($userbean->role_code == 'STAFF') {
//            echo 'In STAFF';
            $get = $inspection->getCenterInspectionList($userbean->center_id);
        } else {
//            echo 'OUT STAFF';
            $get = $inspection->get();
        }

//        echo '<tt><pre>' . var_export($get, TRUE) . '</pre></tt>';
        $data['inspectionList'] = $get;

        $this->load->view('staff/operator_list_inspection', $data);
    }

    /**
     * set final test result with expire date
     * @param type $payment_id
     */
    public function setFianlResult() {
        $this->load->model(array('Payment','Inspection'));

        $payment = new Payment();
        $inspection = new Inspection();
        //update payment status_code = ''

        $updateData = array('status_code' => $this->input->post('status_code'),
            'expire_date' => $this->input->post('expire_date'));
        $payment_id = $this->input->post('payment_id');
        $payment->update_payment($updateData, $payment_id);
        
//        echo '<tt><pre>' . var_export($response, TRUE) . '</pre></tt>';
        $db_error = $this->db->error();
//            echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';
        if ($db_error['code'] == 0) {
            $data['msg'] = '<p class="text-success">New registration has been successful </p>';
        } else {
            $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
        }

        //update the inspection as RESULT
        $inspecUpdate = array('inspec_result'=>'RESULT');
        $inspection->update_inspec($inspecUpdate,  $this->input->post('inspection_id'));
        
        $data['msg'] = '<p class="bg-success msg-success">Result updated successfully</p>';
        $this->load->view('staff/result_receipt.php', $data);
    }

}
