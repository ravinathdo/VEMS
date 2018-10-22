<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>VEMS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Green Wheels Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

        <?php $this->load->view('basecss'); ?>
        <!-- Custom Theme files -->
        <?php $this->load->view('basejs'); ?>

        <script>
            new WOW().init();
        </script>
        <!--//end-animate-->








        <script src="<?php echo site_url('js/wow.min.js'); ?>"></script>

        <link href='<?php echo site_url('css/fullcalendar.min.css'); ?>' rel='stylesheet' />
        <link href='<?php echo site_url('css/fullcalendar.print.min.css'); ?>' rel='stylesheet' media='print' />
        <script src='<?php echo site_url('lib/moment.min.js'); ?>'></script>
        <script src='<?php echo site_url('lib/jquery.min.js'); ?>'></script>
        <script src='<?php echo site_url('lib/jquery.min.js'); ?>'></script>
        <script src='<?php echo site_url('js/fullcalendar.min.js'); ?>'></script>
        <script>

            $(document).ready(function () {

                $('#calendar').fullCalendar({
                    defaultDate: '<?= $this->session->userdata('today')?>',
                    editable: true,
                    eventLimit: true, // allow "more" link when too many events
                    events: [
<?php
if ($bookingList != null)
    foreach ($bookingList as $value) {
        ?>
                                {
                                    title: '<?= $value->id ?>',
                                    start: '<?= $value->book_date_time ?>'
                                },
    <?php }
?>
                    ]
                });
            });
        </script>




    </head>
    <body>
        <?php // echo '<tt><pre>' . var_export($bookingList, TRUE) . '</pre></tt>'; ?>
        <!-- top-header -->
        <div class="top-header">
            <?php
            $this->load->view('_top_header.php');
            ?>
        </div>
        <!--- /top-header ---->
        <!--- header ---->
        <div class="header">
            <?php
            $this->load->view('_header.php');
            ?>
        </div>
        <!--- /header ---->
        <!--- footer-btm ---->
        <div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
            <div class="container">
                <div class="navigation">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                            <nav class="cl-effect-1">
                                <?php
                                $this->load->view('_menu.php');
                                ?> 
                            </nav>
                        </div><!-- /.navbar-collapse -->	
                    </nav>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
        <!--- /footer-btm ---->


        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-4">
                <?= $msg ?>
                <div class="panel panel-success">
                    <div class="panel-heading ">New Reservation</div>
                    <div class="panel-body">
                         <span class="mando-msg">* Fields are mandatory</span>
                        <form class="form-horizontal" action="<?= base_url('Reservation_Controller/newReservation') ?>" method="post" >
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-5 control-label">Customer</label>
                                <div class="col-sm-7">
                                    <input type="hidden" name="customer_id" value="<?= $this->session->userdata('userbean')->id ?>" />
                                    <input type="text" class="form-control" name="" readonly=""  value="<?= $this->session->userdata('userbean')->first_name ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Date Time<span class="mando-msg">*</span></label>
                                <div class="col-sm-7">
                                    <input type="datetime-local"  min="<?= $this->session->userdata('today') ?>T00:00" name="book_date_time" class="form-control" id="inputPassword3" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Select Branch<span class="mando-msg">*</span></label>
                                <div class="col-sm-7">

                                    <select class="form-control" required="" name="center_id">
                                        <option value="">--select branch--</option>
                                        <?php
                                        if ($centerList != null)
                                            foreach ($centerList as $value) {
                                                ?> 
                                                <option value="<?= $value->id ?>"><?= $value->center_name ?></option>
                                            <?php }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label"></label>
                                <div class="col-sm-7">
                                    <button type="submit" class="btn btn-primary">Reserve Now</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div id='calendar'></div>
            </div>
            <div class="col-md-1">
            </div>
        </div>


        <!--- footer-top ---->
        <div class="footer-top">
            <div class="container">
                <?php $this->load->view('_footer_branch'); ?>
            </div>
        </div>
        <!--- /footer-top ---->
        <!---copy-right ---->
        <div class="copy-right">
            <div class="container">
                <?php
                $this->load->view('_footer.php');
                ?>
            </div>
        </div>
        <!--- /copy-right ---->


        <!-- write us -->
        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                    </div>
                    <section>
                        <div class="modal-body modal-spa">
                            <div class="writ">
                                <h4>HOW CAN WE HELP YOU</h4>
                                <ul>
                                    <li class="na-me">
                                        <input class="name" type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Name';
                                                }" required="">
                                    </li>
                                    <li class="na-me">
                                        <input class="Email" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Email';
                                                }" required="">
                                    </li>
                                    <li class="na-me">
                                        <input class="number" type="text" value="Mobile Number" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Mobile Number';
                                                }" required="">
                                    </li>
                                    <li class="na-me">
                                        <select id="country" onchange="change_country(this.value)" class="frm-field required sect">
                                            <option value="null">Select Issue</option> 		
                                            <option value="null">Booking Issues</option>
                                            <option value="null">Bus Cancellation</option>
                                            <option value="null">Refund</option>
                                            <option value="null">Wallet</option>														
                                        </select>
                                    </li>
                                    <li class="na-me">
                                        <select id="country" onchange="change_country(this.value)" class="frm-field required sect">
                                            <option value="null">Select Issue</option> 		
                                            <option value="null">Booking Issues</option>
                                            <option value="null">Bus Cancellation</option>
                                            <option value="null">Refund</option>
                                            <option value="null">Wallet</option>														
                                        </select>
                                    </li>
                                    <li class="descrip">
                                        <input class="special" type="text" value="Write Description" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Write Description';
                                                }" required="">
                                    </li>
                                    <div class="clearfix"></div>
                                </ul>
                                <div class="sub-bn">
                                    <form>
                                        <button class="subbtn">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- //write us -->



    </body>
</html>

