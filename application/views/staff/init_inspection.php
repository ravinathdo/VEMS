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


        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-4">

                <div class="panel panel-primary">
                    <div class="panel-heading ">Booking Detail</div>
                    <div class="panel-body">
                        <table border="0" style="width: 100%">
                            <tbody>
                                <tr>
                                    <td>Booking NO</td>
                                    <td><?= $bookingDetails[0]->id ?></td>
                                </tr>
                                <tr>
                                    <td>Booking DateTime</td>
                                    <td><?= $bookingDetails[0]->book_date_time ?></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td><?= $bookingDetails[0]->status_code ?></td>
                                </tr>
                                <tr>
                                    <td>Customer</td>
                                    <td><?= $bookingDetails[0]->first_name ?> [<?= $bookingDetails[0]->nic ?>]</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><?= $bookingDetails[0]->created_datetime ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>                
            </div>
            <div class="col-md-6">


                <div class="panel panel-success">
                    <div class="panel-heading ">Customer Vehicle List</div>
                    <div class="panel-body">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Reg No</th>
                                    <th>type_code</th>
                                    <th>fual_type</th>
                                    <th>manufac_year</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($customerVehicleList as $value) { ?>
                                    <tr>
                                        <td><?= $value->reg_no ?></td>
                                        <td><?= $value->type_code ?></td>
                                        <td><?= $value->fual_type ?></td>
                                        <td><?= $value->manufac_year ?></td>
                                        <td><a href="<?php echo site_url('Inspection_Controller/loadInspection') ?>/<?= $value->id ?>/<?= $value->reg_no ?>/<?= $bookingDetails[0]->id ?>">Inspec Now</a></td>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>


                <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
                <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
                <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable();
            });
                </script>

            </div>
            <div class="col-md-1"></div>
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



    </body>
</html>

