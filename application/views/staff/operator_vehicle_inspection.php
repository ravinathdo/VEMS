<!--
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
        <!--        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
                <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
                <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>-->

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
            
            
            
            <form action="<?= base_url('Inspection_Controller/inspection') ?>" method="post">
                <center> <h2>Vehicle Inspection</h2></center>

                <div class="col-md-1">

                </div>
                <div class="col-md-4"><span class="mando-msg">* Fields are mandatory</span>
                    <table class="table table-bordered">
                        <tr>
                            <td>VEHICLE NO</td>
                            <td><?= $reg_no; ?> 
                                <input type="hidden" value="<?= $vehicle_id ?>" name="vehicle_id" />
                                <input type="hidden" value="<?= $booking_id ?>" name="booking_id" />
                            </td>
                        </tr> 
                        <tr>
                            <td>Engine Type<span class="mando-msg">*</span></td>
                            <td>
                                <select name="" name="engine_type" required="" class="form-control" >
                                    <option value="manual">Manual</option>
                                    <option value="auto">Auto</option>
                                </select>
                            </td>
                        </tr> 
                    </table>

                    <table class="table table-bordered">
                        <tr>
                            <td>Chassis Number<span class="mando-msg">*</span></td>
                            <td><select class="form-control" required="" name="chassis_number">
                                    <option>--select--</option>
                                    <option value="Accepted">Accepted</option>
                                    <option value="Not Accepted">Not Accepted</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Engine Number<span class="mando-msg">*</span></td>
                            <td><select class="form-control" required="" name="engine_number">
                                    <option>--select--</option>
                                    <option value="Accepted">Accepted</option>
                                    <option value="Not Accepted">Not Accepted</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Absence of Silencer Leak<span class="mando-msg">*</span></td>
                            <td><select class="form-control" required="" name="silencer_leak">
                                    <option>--select--</option>
                                    <option value="Accepted">Accepted</option>
                                    <option value="Not Accepted">Not Accepted</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Absence of oil leak<span class="mando-msg">*</span></td>
                            <td><select class="form-control"  required="" name="oil_leak">
                                    <option>--select--</option>
                                   <option value="Accepted">Accepted</option>
                                    <option value="Not Accepted">Not Accepted</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Presence of air leak<span class="mando-msg">*</span></td>
                            <td><select class="form-control" required="" name="air_leak">
                                    <option>--select--</option>
                                    <option value="Accepted">Accepted</option>
                                    <option value="Not Accepted">Not Accepted</option>
                                </select></td>
                        </tr>
                    </table>

                </div>
                <div class="col-md-1">

                </div>
                <div class="col-md-4">
                    <table class="table table-bordered">

                        <tr>
                            <td>Good condition of fuel tank cap<span class="mando-msg">*</span></td>
                            <td><select class="form-control" required="" name="fuel_tank_cap">
                                    <option>--select--</option>
                                    <option value="Accepted">Accepted</option>
                                    <option value="Not Accepted">Not Accepted</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Presence of plug top<span class="mando-msg">*</span> </td>
                            <td><select class="form-control" required="" name="plug_top">
                                    <option>--select--</option>
                                    <option value="Accepted">Accepted</option>
                                    <option value="Not Accepted">Not Accepted</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Stable engine idle RPM<span class="mando-msg">*</span> </td>
                            <td><select class="form-control" required="" name="engine_idle_RPM">
                                    <option>--select--</option>
                                    <option value="Accepted">Accepted</option>
                                    <option value="Not Accepted">Not Accepted</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Absence of abnormal Vibration<span class="mando-msg">*</span> </td>
                            <td><select class="form-control" required="" name="abnormal_vibration">
                                    <option>--select--</option>
                                    <option value="Accepted">Accepted</option>
                                    <option value="Not Accepted">Not Accepted</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Absence of noticeable water leakages<span class="mando-msg">*</span></td>
                            <td><select class="form-control" required="" name="water_leakages">
                                    <option>--select--</option>
                                    <option value="Accepted">Accepted</option>
                                    <option value="Not Accepted">Not Accepted</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="radio" name="inspec_result" value="ACCEPT" required="" /> Accept for Test <br>
                                <input type="radio" name="inspec_result" value="REJECT" /> Reject for Test 
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button type="submit" class="btn btn-primary">Inspec Now</button>
                            </td>
                        </tr>
                    </table>



                </div>
                <div class="col-md-1">

                </div>
            </form>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading ">Vehicle List</div>
                    <div class="panel-body">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Reg NO</th>
                                    <th>Vehicle NO</th>
                                    <th>Category</th>
                                    <th>Fual Type</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Reg NO</th>
                                    <th>Vehicle NO</th>
                                    <th>Category</th>
                                    <th>Fual Type</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>CAO-4847</td>
                                    <td>Car</td>
                                    <td>Petrol</td>
                                    <td><a href="<?php echo base_url('Inspection/loadInspection'); ?>">Inspec Now</a></td>
                                    <td>Active</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>

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
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</html>

