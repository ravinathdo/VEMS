<?php

if(null !== $this->session->userdata('userbean')){
    switch ($this->session->userdata('userbean')->role_code) {
        case 'ADMIN':
            $this->load->view('_menu_admin.php');
            break;
        case 'MANAGER':
            $this->load->view('_menu_manager.php');
            break;
        case 'STAFF':
            $this->load->view('_menu_staff.php');
            break;
        case 'CUSTOMER':
            $this->load->view('_menu_customer.php');
            break;
    }
} else {
    $this->load->view('_menu_prelogin.php');
}
?> 