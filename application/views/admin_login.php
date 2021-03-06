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
            //$this->load->view('_top_header.php');
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
                                <ul class="nav navbar-nav">
                                    <li class="active">Administrator</li>
                                    <div class="clearfix"></div>
                                </ul>
                            </nav>
                        </div><!-- /.navbar-collapse -->	
                    </nav>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
        <!--- /footer-btm ---->


        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <br>
                <div class="panel panel-success">
                    <div class="panel-heading ">Green Drive Login</div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="<?php echo base_url(); ?>Admin/userLogin" method="post">
                            <fieldset>
                                <!-- Form Name -->
                                <?= $msg ?>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="username">Username</label>  
                                    <div class="col-md-8">
                                        <input id="username" name="username" type="text" placeholder="username" class="form-control input-md" required="">
                                    </div>
                                </div>

                                <!-- Password input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="pword">Password</label>
                                    <div class="col-md-8">
                                        <input id="pword" name="password" type="password" placeholder="Password" class="form-control input-md">

                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="singlebutton"></label>
                                    <div class="col-md-8">
                                        <button id="singlebutton" name="singlebutton" class="btn btn-success">Login</button>
                                    </div>
                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>



            </div>
            <div class="col-md-4"></div>
        </div>


        <!--- footer-top ---->
        <?php $this->load->view('_footer.php'); ?>
        <!---// footer-top ---->




    </body>
</html>

