<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Center_Controller
 *
 * @author ravi
 */
class Center_Controller extends CI_Controller {

    //put your code here
    public function index() {
        $this->load->model(array('Center', 'District'));
        $center = new Center();
        $district = new District();

        $centerList = $center->getCenterList();
        $districtList = $district->get();

        $data['centerList'] = $centerList;
        $data['districtList'] = $districtList;

        // echo '<tt><pre>' . var_export($centerList, TRUE) . '</pre></tt>';
        $this->load->view('/admin/admin_center', $data);
    }

    public function loadEditCenter() {
//        $this->uid = $this->input->get('centerid', TRUE);
//        echo $this->uid;
        $this->load->view('admin_edit_center');
    }

    public function add() {
        $this->load->model(array('Center', 'District'));
//        $userbean = $this->session->userdata('userbean');
        $center = new Center();
        $district = new District();


        $post_data = $center->array_from_post(array('center_name', 'mobile', 'email', 'address', 'district_name','status_code'));

        $center->center_name = $post_data['center_name'];
        $center->mobile = $post_data['mobile'];
        $center->email = $post_data['email'];
        $center->address = $post_data['address'];
        $center->district_name = $post_data['district_name'];
        $center->status_code = $post_data['status_code'];
        $center->created_user = $this->session->userdata('userbean')->id;

        $center->save();
        $db_error = $this->db->error();
//        echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';
        if ($db_error['code'] == 0) {
            $data['msg'] = '<p class="bg-success msg-success"> Center creation successful </p>';
        } else {
            $data['msg'] = '<p class="bg-danger msg-err"> Invalid or duplicate entry found </p>';
        }


        $centerList = $center->getCenterList();
        $districtList = $district->get();

        $data['centerList'] = $centerList;
        $data['districtList'] = $districtList;




        $this->load->view('/admin/admin_center', $data);
    }

}
