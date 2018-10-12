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
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading ">Customer Creation</div>
                    <div class="panel-body">
                          <form class="form-horizontal" action="<?php echo site_url('Customer_Controller/add') ?>" method="post">
                    <fieldset>
                                                <span class="mando-msg">* Fields are mandatory</span>

                        <!-- Form Name -->
                        <legend></legend>
                        <?php echo $msg ?>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="first_name">First Name<span class="mando-msg">*</span></label>  
                            <div class="col-md-8">
                                <input id="first_name" required="" name="first_name" type="text" placeholder="first name" class="form-control input-md">
                            </div>
                        </div>

                        <!-- Search input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="last_name">Last Name</label>
                            <div class="col-md-8">
                                <input id="last_name" name="last_name" type="search" placeholder="last name" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="nic">NIC<span class="mando-msg">*</span></label>  
                            <div class="col-md-8">
                                <input id="nic" required="" name="nic" type="text" placeholder="nic" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="mobile_number">Mobile Number</label>  
                            <div class="col-md-8">
                                <input id="mobile_number" name="mobile_number" type="text" placeholder="mobile number" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="email">email</label>  
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="email" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="address">Address</label>
                            <div class="col-md-8">                     
                                <textarea class="form-control" id="address" name="address"></textarea>
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="status_code">Status Code</label>
                            <div class="col-md-8">
                                <select id="status_code" name="status_code" class="form-control">
                                    <option value="ACTIVE">ACTIVE</option>
                                    <option value="DEACTIVE">DEACTIVE</option>
                                </select>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton"></label>
                            <div class="col-md-8">
                                <button id="singlebutton" name="singlebutton" class="btn btn-primary">Create Customer</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
                    </div>
                </div>
                
              

            </div>
            <div class="col-md-8">
                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>NIC</th>
                            <th>Mobile Number</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($customerList as $value) {
                            ?> 
                            <tr>
                                <td><?php echo $value->first_name ?></td>
                                <td><?php echo $value->last_name ?></td>
                                <td><?php echo $value->nic ?></td>
                                <td><?php echo $value->mobile_number ?></td>
                                <td><?php echo $value->status_code ?> </td>
                                <td></td>
                            </tr>
                            <?php
                        }
                        ?>

                    </tbody>
                </table>
                <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
                <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
                <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable();
            });
                </script>


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



    </body>




</html>

