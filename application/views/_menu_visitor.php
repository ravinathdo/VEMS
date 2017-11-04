
<?php
if (isset($userbean)) {

    if ($userbean->rolecode == 'CUSTOMER') {
        echo 'customer';
    }
} else {
    ?> 

    <ul class="nav navbar-nav">
        <li class="active"><a href="customer_new_reservation.php">New Reservation</a></li>
        <li><a href="<?php echo base_url('Menu_Controller/about'); ?>">About</a></li>
        <!--    <li><a href="faq.html">Faq</a></li>
            <li><a href="apps.html">Apps</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="travels.html">Travels</a></li>
            <li><a href="privacy.html">Privacy Policy</a></li>
            <li><a href="agent.html">Agent Registration</a></li>-->
        <li><a href="<?php echo base_url('Menu_Controller/terms'); ?>">Terms of Use</a></li>
        <li><a href="<?php echo base_url('Menu_Controller/contact'); ?>">Contact Us</a></li>
        <li>Need Help?<a href="#" data-toggle="modal" data-target="#myModal3"> / Write Us </a>  </li>
        <div class="clearfix"></div>
    </ul>

    <?php
}
?>

