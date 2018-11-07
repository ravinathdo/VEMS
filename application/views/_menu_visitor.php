
<?php
if ($this->session->userdata('userbean')) {
    $userbean = $this->session->userdata('userbean');
    if (isset($userbean)) {
        if ($userbean->rolecode == 'CUSTOMER') {
           $this->load->view('_menu_customer');
        }
        if ($userbean->rolecode == 'ADMIN') {
           $this->load->view('_menu_admin');
        }
    } else {
       
    }
} else {
     ?> 
        <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url('Menu_Controller/'); ?>">New Reservation</a></li>
            <li><a href="<?php echo base_url('Menu_Controller/about'); ?>">About</a></li>
            <li><a href="<?php echo base_url('Menu_Controller/terms'); ?>">Terms of Use</a></li>
            <li><a href="<?php echo base_url('Menu_Controller/contact'); ?>">Contact Us</a></li>
            <div class="clearfix"></div>
        </ul>
        <?php
}
?>

