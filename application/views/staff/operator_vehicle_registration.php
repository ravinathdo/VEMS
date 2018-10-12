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
            <center> <h2>Vehicle Registration</h2></center>
            <form class="form-horizontal" action="<?php echo site_url('Vehicle_Controller/add') ?>" method="post">
                <div class="col-md-1">

                </div>
                <div class="col-md-4">
<span class="mando-msg">* Fields are mandatory</span>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Manufacture Year<span class="mando-msg">*</span></label>
                        <input type="text" name="manufac_year"  required=""class="form-control" id="exampleInputEmail1" placeholder="Year">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Brand <span class="mando-msg">*</span></label>
                        <select name="brand_code" class="form-control" required="">
                            <option value="">--Select Brand--</option>
                            <?php foreach ($brandList as $value) {
                                ?>  <option value="<?php echo $value->brand_code; ?>"><?php echo $value->decription; ?></option> <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Vehicle Reg Number<span class="mando-msg">*</span></label>
                        <input name="reg_no" type="text" required="" class="form-control" id="exampleInputPassword1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Vehicle Type (Category)<span class="mando-msg">*</span></label>
                        <select name="type_code" class="form-control" required="">
                            <option value="">--Select Category--</option>
                            <?php foreach ($typeList as $value) {
                                ?>  <option value="<?php echo $value->type_code; ?>"><?php echo $value->description; ?> </option> <?php
                            }
                            ?>
                        </select>
                    </div>

                </div>
                <div class="col-md-1">

                </div>
                <div class="col-md-4">

                    <div class="form-group">
                        <label for="exampleInputPassword1">Customer<span class="mando-msg">*</span></label>
                        <select name="customer_id" class="form-control" required="">
                            <option>--Select Customer--</option>
                            <?php foreach ($customerList as $value) {
                                ?>  <option value="<?php echo $value->id; ?>"><?php echo $value->nic; ?> - <?php echo $value->first_name; ?> </option> <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Fual Type<span class="mando-msg">*</span></label>
                        <select name="fual_type" class="form-control" required="">
                            <option value="">--Select Fual Type--</option>
                            <?php foreach ($fualList as $value) {
                                ?>  <option value="<?php echo $value->fual_type; ?>"><?php echo $value->fual_type; ?></option> <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Stroke<span class="mando-msg">*</span></label>
                        <select name="stroke" class="form-control" required="">
                            <option value="">--Select Stroke--</option>
                            <option value="6">6</option>
                            <option value="5">5</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Cylinder</label>
                        <input name="cylinder" type="text" class="form-control"/>
                    </div>

                    <button type="submit" class="btn btn-primary">Register</button>

                </div>
                
                <div class="col-md-1">

                </div>
            </form>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>manufac_year</th>
                            <th>type_code</th>
                            <th>reg_no</th>
                            <th>stroke</th>
                            <th>Fual Type</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>manufac_year</th>
                            <th>type_code</th>
                            <th>reg_no</th>
                            <th>stroke</th>
                            <th>Fual Type</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <?php foreach ($vehicleList as $value) {
                            ?>  
                            <tr>
                                <td><?= $value->manufac_year ?></td>
                                <td><?= $value->reg_no ?></td>
                                <td><?= $value->type_code ?></td>
                                <td><?= $value->stroke ?></td>
                                <td><?= $value->fual_type ?></td>
                                <td><?= $value->brand_code ?></td>
                            </tr>
                            <?php
                        }
                        ?>



                    </tbody>
                </table>
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

