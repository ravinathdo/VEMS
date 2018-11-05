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
            </div>
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading ">User Creation</div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="<?php echo site_url('User_Controller/updateUser') ?>"  method="post">
                            <fieldset>
                                <input type="hidden" name="id" value="<?= $user_update->id ?>" />
                                <!-- Form Name -->
                                <span class="mando-msg">* Fields are mandatory</span>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="first_name">First Name<span class="mando-msg">*</span></label>  
                                    <div class="col-md-8">
                                        <input id="first_name" name="first_name" required="" type="text" placeholder="First Name" pattern="^[a-zA-Z\s]{1,50}$" title="Invalid input"  class="form-control input-md" value="<?= $user_update->first_name ?>" >
                                        <?php // echo '<tt><pre>' . var_export($user_update, TRUE) . '</pre></tt>'; ?>
                                    </div>
                                </div>


                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="last_name">Last Name</label>  
                                    <div class="col-md-8">
                                        <input id="last_name" name="last_name" type="text" placeholder="Last Name" class="form-control input-md" pattern="^[a-zA-Z\s]{1,50}$" title="Invalid input" value="<?= $user_update->last_name ?>"  >

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="username">Username<span class="mando-msg">*</span></label>  
                                    <div class="col-md-8">
                                        <input id="username" name="username" required="" readonly="" pattern="^[a-zA-Z0-9]{10}$" title="Letters and numbers only, max length 10 characters" type="text" placeholder="Username" class="form-control input-md" value="<?= $user_update->username ?>"  >

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" name="nic" >NIC/PPN<span class="mando-msg">*</span></label>  
                                    <div class="col-md-8">
                                        <input id="nic" readonly="" name="nic" type="text" required=""  pattern="(?:((^\d{9})(v$))|((^\d{9})(x$))|(^\d{12}$))" title="9 digit with 'x' or 'v', 12 digit modern NIC" placeholder="nic" class="form-control input-md"  value="<?= $user_update->nic ?>" >

                                    </div>
                                </div>



                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="center_id">Center Name<span class="mando-msg">*</span></label>
                                    <div class="col-md-8">
                                        <select id="center_id" required="" name="center_id" class="form-control">
                                            <option value="">--select--</option>
                                            <?php
                                            foreach ($centerList as $rows) {
                                                ?> <option value="<?= $rows->id ?>"  <?php if ($rows->id == $user_update->center_id) { ?> selected="" <?php } ?>    ><?= $rows->center_name ?></option> <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="mobile_number">Mobile No</label>  
                                    <div class="col-md-8">
                                        <input id="mobile_number" name="mobile_number" type="text" placeholder="Mobile Number" class="form-control input-md"  value="<?= $user_update->mobile_number ?>" >

                                    </div>
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="role_code">User Role<span class="mando-msg">*</span></label>
                                    <div class="col-md-8">
                                        <select id="role_code" required="" name="role_code" class="form-control">
                                            <option value="">--select role--</option>
                                            <?php
                                            foreach ($roleList as $rows) {
                                                ?> <option value="<?= $rows->role_code ?>"  <?php if ($rows->role_code == $user_update->role_code) { ?> selected="" <?php } ?> ><?= $rows->description ?></option> <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="address">Address</label>
                                    <div class="col-md-8">                     
                                        <textarea class="form-control" id="address" name="address"> <?= $user_update->address ?> </textarea>
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
                                        <button id="singlebutton" name="singlebutton" class="btn btn-success">Update User</button>
                                    </div>
                                </div>

                            </fieldset>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-4">


                <form action="<?= base_url('User_Controller/passwordReset') ?>" method="post">
                    <input type="hidden" name="id" value="<?= $user_update->id ?>" />
                    <input type="hidden" name="nic" value="<?= $user_update->nic ?>" />
                    <button id="singlebutton" name="resetPass" class="btn btn-success">Reset Password</button>
                </form>

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

