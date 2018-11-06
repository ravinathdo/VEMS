<!DOCTYPE HTML>
<html>
    <head>
        <title>VEMS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Green Wheels Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <?php $this->load->view('basecss'); ?>
        <!-- Custom Theme files -->
        <?php $this->load->view('basejs'); ?>

        <script>
            new WOW().init();
        </script>
        <!--//end-animate-->
    </head>
    <body>
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



        <!--STAFF user home--> 
        <?php
//        echo '<tt><pre>' . var_export($this->session->userdata('userbean'), TRUE) . '</pre></tt>';
        if ($this->session->userdata('userbean')->role_code == 'STAFF') {
            ?> 
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-1">
                    <div class="panel panel-primary">
                        <div class="panel-heading" style="text-align: center">New Bookings</div>
                        <div class="panel-body">
                            <h1 style="text-align: center"><?php
                                $openBooking = $this->session->userdata('openBooking');
                                echo sizeof($openBooking);
                                ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-4">
                    <img src="<?= base_url('images/purpose-lab-tests-wltp.png') ?>" />
                </div>
                <div class="col-md-1">

                </div>
            </div>
            <?php
        }
        ?>
        <!--STAFF user home--> 

        <?php
        if ($this->session->userdata('userbean')->role_code == 'MANAGER') {
            ?> 
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <?php $centerDetail = $this->session->userdata('centerDetail') ?>
                    <table class="table-bordered">
                        <tr>
                            <td><h1> <?= $centerDetail[0]->center_name ?> </h1> </td>
                        </tr>
                        <tr>
                            <td><?= $centerDetail[0]->mobile ?> </td>
                        </tr>
                        <tr>
                            <td><?= $centerDetail[0]->address ?> </td>
                        </tr>
                    </table>

                </div>

                <div class="col-md-4">   <img src="<?= base_url('images/purpose-lab-tests-wltp.png') ?>" /></div>
                <div class="col-md-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading" style="text-align: center">New Bookings</div>
                        <div class="panel-body">
                            <h1 style="text-align: center"><?php
                                $openBooking = $this->session->userdata('openBooking');
                                echo sizeof($openBooking);
                                ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
            </div>
            <?php
        }
        ?>

        <?php
        if ($this->session->userdata('userbean')->role_code == 'ADMIN') {
            ?>
            <div class="row">
                <div class="col-md-8">
                    <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

                </div>
                <div class="col-md-4">.col-md-4</div>
            </div>


            <script>

                Highcharts.chart('container', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Centers Inspections'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                style: {
                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                }
                            }
                        }
                    },
                    series: [{
                            name: 'Count',
                            colorByPoint: true,
                            data: [<?php
        $centerInspectionsList = $this->session->userdata('centerInspectionsList');
        foreach ($centerInspectionsList as $value) {
            ?> {
                                        name: '<?= $value->center_name ?>',
                                        y: <?= $value->CNT ?>
                                    },<?php } ?>]
                        }]
                });
            </script>


            <?php echo '<tt><pre>' . var_export($this->session->userdata('centerInspectionsList'), TRUE) . '</pre></tt>'; ?>


            <?php
        }
        ?>
        <?php
        if ($this->session->userdata('userbean')->role_code == 'CUSTOMER') {
            ?>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-1">
                    <div class="panel panel-primary">
                        <div class="panel-heading ">My Bookings</div>
                        <div class="panel-body">
                            <h1>
                                <?php
                                if ($this->session->userdata('openBookings') != false) {
                                    echo sizeof($this->session->userdata('openBookings'));
                                } else {
                                    echo '0';
                                }
                                ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <h2><br>  Now we are in Island wide,
                        Find your nearest </h2>
                    <div class="logo wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                        <a href="#">Drive <span>Green</span></a>	
                    </div>

                </div>
                <div class="col-md-3"><img src="<?= base_url('images/img_customer.png') ?>" /></div>
                <div class="col-md-1"></div>
            </div>
            <?php
        }
        ?>

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

