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
                                $this->load->view('_menu_admin.php');
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
                <form class="form-horizontal" action="<?php echo site_url('User_Controller/add') ?>"  method="post">
                    <fieldset>

                        <!-- Form Name -->
                        <legend style="text-align: center">User Creation</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="first_name">First Name</label>  
                            <div class="col-md-8">
                                <input id="first_name" name="first_name" type="text" placeholder="First Name" class="form-control input-md" >
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="last_name">Last Name</label>  
                            <div class="col-md-8">
                                <input id="last_name" name="last_name" type="text" placeholder="Last Name" class="form-control input-md" >

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="username">Username</label>  
                            <div class="col-md-8">
                                <input id="username" name="username" type="text" placeholder="Username" class="form-control input-md" >

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" name="nic" >NIC</label>  
                            <div class="col-md-8">
                                <input id="nic" name="nic" type="text" placeholder="nic" class="form-control input-md">

                            </div>
                        </div>



                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="center_id">Center Name</label>
                            <div class="col-md-8">
                                <select id="center_id" name="center_id" class="form-control">
                                    <option value="">--select--</option>
                                    <?php
                                    foreach ($centerList as $rows) {
                                        ?> <option value="<?= $rows->id ?>"><?= $rows->center_name ?></option> <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="mobile_number">Mobile No</label>  
                            <div class="col-md-8">
                                <input id="mobile_number" name="mobile_number" type="text" placeholder="Mobile Number" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="role_code">User Role</label>
                            <div class="col-md-8">
                                <select id="role_code" name="role_code" class="form-control">
                                    <option value="">--select role--</option>
                                    <?php
                                    foreach ($roleList as $rows) {
                                        ?> <option value="<?= $rows->role_code ?>"><?= $rows->description ?></option> <?php
                                    }
                                    ?>
                                </select>
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
                            <label class="col-md-4 control-label" for="status_code">Status</label>
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
                                <button id="singlebutton" name="singlebutton" class="btn btn-success">Create User</button>
                            </div>
                        </div>

                    </fieldset>
                </form>


            </div>
            <div class="col-md-8">


                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th>Mobile</th>
                            <th>Center</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($userList as $row) {
                            ?>
                            <tr>
                                <td><?= $row->first_name ?></td>
                                <td><?= $row->last_name ?></td>
                                <td><?= $row->username ?></td>
                                <td><?= $row->mobile_number ?></td>
                                <td><?= $row->center_name ?></td>
                                <td><?= $row->role_code ?></td>
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

