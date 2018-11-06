<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User_Controller
 *
 * @author indeewara
 */
class User_Controller extends CI_Controller {

    //put your code here

    public function index() {
//		$this->load->view('student/student_register');
        $this->load->view('index');
    }

    public function logout() {
        $this->session->unset_userdata('userbean');
        $this->session->unset_userdata('logged_in');
        $this->load->view('index');
    }

    public function userLogin() {
        echo 'userlogin';
        $this->load->model(array('Users'));
        $formData = $this->Users->array_from_post(array('username', 'password'));
        echo '<tt><pre>' . var_export($formData, TRUE) . '</pre></tt>';

        $doLogin = $this->Users->getUserLogin($formData);

        // echo sha1('a');
        echo '<tt><pre>' . var_export($doLogin, TRUE) . '</pre></tt>';

        if ($doLogin) {

            //get login date 
            date_default_timezone_set('Asia/Colombo');
            $today = date("Y-m-d", time());

            $newdata = array(
                'userbean' => $doLogin[0],
                'logged_in' => TRUE,
                'today' => $today
            );
            $this->session->set_userdata($newdata);
            $this->load->view('home');
        } else {
            $data['msg'] = '<p class="bg-success"> Invalid username or password </p>';
            $this->load->view('index', $data);
        }
    }

    public function loadUserCreation() {
        $this->load->model(array('Users', 'Center', 'Role'));

        $userbean = $this->session->userdata('userbean');

        $center = new Center();
        $role = new Role();
        $users = new Users();

        $centerList = $center->get();
        $roleList = $role->get();



        $data['centerList'] = $centerList;
        $data['roleList'] = $roleList;


        // if admin or manager
        switch ($this->session->userdata('userbean')->role_code) {
            case 'ADMIN':
                $userList = $users->getUserList();
                $data['userList'] = $userList;
                $this->load->view('admin/admin_user_creation', $data);
                break;
            case 'MANAGER':
                $userList = $users->getUserListOnCenter($this->session->userdata('userbean')->center_id);
//                echo '<tt><pre>' . var_export($userList, TRUE) . '</pre></tt>';
                $data['userList'] = $userList;
                $this->load->view('manager/manager_user_creation', $data);
                break;
        }
    }

    public function updateUser() {
        $this->load->model(array('Users'));
        $dataArray = array('first_name'=> $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'nic' => $this->input->post('nic'),
            'username' => $this->input->post('username'),
            'mobile_number' => $this->input->post('mobile_number'),
            'address' => $this->input->post('address'),
            'role_code' => $this->input->post('role_code'),
            'center_id' => $this->input->post('center_id'),
            'status_code' => $this->input->post('status_code'));

        $users0 = new Users();
        
//        echo '<tt><pre>' . var_export($dataArray, TRUE) . '</pre></tt>';
        
        $users0->update_user($dataArray, $this->input->post('id'));
        $data['msg'] = '<p class="bg-success msg-success">User updated successfully</p>';
        $this->load->view('msg', $data);
    }

    public function passwordReset() {
        $this->load->model(array('Users'));
        $users = new Users();

        $newPword = sha1($this->input->post('nic'));
        $id = $this->input->post('id');
        $updateArray = array('pword' => $newPword);


        $users->update_user($updateArray, $id);


        $db_error = $this->db->error();
        echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';
        if ($db_error['code'] == 0) {
            $data['msg'] = '<p class="text-success">New registration has been successful </p>';
        } else {
            $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
        }


        $data['msg'] = '<p class="bg-success msg-success">Password updated successfuly</p>';

        $this->load->view('msg', $data);
    }

    public function loadUpdateUser() {
        $this->load->model(array('Users', 'Center', 'Role'));
        $uid = $this->input->get('uid');

        //form data
        $center = new Center();
        $role = new Role();
        $users = new Users();

        $centerList = $center->get();
        $roleList = $role->get();


        //manager get user for his center only
        // if admin or manager
        switch ($this->session->userdata('userbean')->role_code) {
            case 'ADMIN':
                $userList = $users->getUserList();
                break;
            case 'MANAGER':
                $userList = $users->getUserListOnCenter($this->session->userdata('userbean')->center_id);
                break;
        }

        $data['centerList'] = $centerList;
        $data['roleList'] = $roleList;
        $data['userList'] = $userList;
        //--form data

        $user = $users->getUser($uid);
        if ($user) {
            $data['user_update'] = $user[0];
        }

        $this->load->view('admin/admin_user_update', $data);
    }

    public function add() {
        $this->load->model(array('Users', 'Center'));
        $arry_input = $this->array_from_post(array('first_name', 'last_name', 'nic', 'username', 'mobile_number', 'address', 'role_code', 'center_id', 'status_code'));

        $userbean = $this->session->userdata('userbean');

        $users = new Users();
        $users->first_name = $arry_input['first_name'];
        $users->last_name = $arry_input['last_name'];
        $users->nic = $arry_input['nic'];
        $users->username = $arry_input['username'];
        $users->pword = sha1($users->username);
        $users->mobile_number = $arry_input['mobile_number'];
        $users->address = $arry_input['address'];
        $users->role_code = $arry_input['role_code'];
        $users->center_id = $arry_input['center_id'];
        $users->status_code = $arry_input['status_code'];
        $users->created_user = $userbean->id;


        $users->save();
        $db_error = $this->db->error();
//        echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';
        if ($db_error['code'] == 0) {
            $data['msg'] = '<p class="bg-success msg-success">New user created successfully</p>';
        } else {
            $data['msg'] = '<p class="bg-error msg-err">Invalid or duplicate data</p>';
        }
        //new user created message on same page 
        $this->load->view('/msg', $data);
//        echo '<tt><pre>' . var_export($arry_input, TRUE) . '</pre></tt>';
    }

    public function loadEditUser() {
        $this->load->view('admin_edit_user');
    }

    public function array_from_post($fields) {
        $data = array();

        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }

}
