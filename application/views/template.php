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
     
        <?php $this->load->view('basecss');?>
        <!-- Custom Theme files -->
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!--animate-->
        <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
        <script src="js/wow.min.js"></script>
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
                                 $this->load->view('_menu_visitor.php');
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
            <div class="col-md-8">.col-md-8</div>
            <div class="col-md-4">.col-md-4</div>
        </div>
        
        
        <!--- footer-top ---->
        <div class="footer-top">
            <div class="container">
                <div class="col-md-6 footer-left wow fadeInLeft animated" data-wow-delay=".5s">
                    <h3>Bus Operators</h3>
                    <ul>
                        <li><a href="bus.html">New York  Charter </a></li>
                        <li><a href="bus.html">Washington Charter</a></li>
                        <li><a href="bus.html">Los Angeles Charter</a></li>
                        <li><a href="bus.html">Chicago Charter</a></li>
                        <li><a href="bus.html">Orlando Charter</a></li>
                        <li><a href="bus.html">New Orleans Charter</a></li>
                        <li><a href="bus.html">Houston Charter</a></li>
                        <li><a href="bus.html">Nashville Charter</a></li>
                        <li><a href="bus.html">Charlotte Charter</a></li>
                        <li><a href="bus.html">Toronto Charter</a></li>
                        <li><a href="bus.html">Washington Charter</a></li>
                        <li><a href="bus.html">Los Angeles Charter</a></li>
                        <li><a href="bus.html">Chicago Charter</a></li>
                        <li><a href="bus.html">Orlando Charter</a></li>
                        <li><a href="bus.html">New Orleans Charter</a></li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <div class="col-md-6 footer-left wow fadeInRight animated" data-wow-delay=".5s">
                    <h3>Bus Routes</h3>
                    <ul>
                        <li><a href="travels.html">Alabama-California</a></li>
                        <li><a href="travels.html">Alaska-Colorado</a></li>
                        <li><a href="travels.html">Arizona-Delaware</a></li>
                        <li><a href="travels.html">Arkansas-Florida</a></li>
                        <li><a href="travels.html">Kansas-Georgia</a></li>
                        <li><a href="travels.html">Iowa-Hawaii</a></li>
                        <li><a href="travels.html">Indiana-Illinois</a></li>
                        <li><a href="travels.html">Illinois-Florida</a></li>
                        <li><a href="travels.html">Idaho-Indiana</a></li>
                        <li><a href="travels.html">Hawaii-Iowa</a></li>
                        <li><a href="travels.html">Georgia-Kansas</a></li>
                        <li><a href="travels.html">Florida-Arkansas</a></li>
                        <li><a href="travels.html">Delaware-Arizona</a></li>
                        <li><a href="travels.html">Colorado-Alaska</a></li>
                        <li><a href="travels.html">California-Alabama</a></li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <div class="clearfix"></div>
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
                                                    this.value = 'Write Description';}" required="">
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

