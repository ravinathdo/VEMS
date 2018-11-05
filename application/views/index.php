<!--
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>Drive Green</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="" />
        <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

        <?php $this->load->view('basecss'); ?>
        <?php $this->load->view('basejs'); ?>

        <script>
            new WOW().init();
        </script>
        <!--//end-animate-->
    </head>
    <body>
        
        <!--pre_header-->
        <?php include './_pre_header.php';?>
        <!--pre_header-->
        
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
            <li class="active"><a href="#booking" >New Reservation</a></li>
            <li><a href="<?php echo base_url('Menu_Controller/about'); ?>">About</a></li>
            <!--    <li><a href="faq.html">Faq</a></li>
                <li><a href="apps.html">Apps</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="travels.html">Travels</a></li>
                <li><a href="privacy.html">Privacy Policy</a></li>
                <li><a href="agent.html">Agent Registration</a></li>-->
            <li><a href="<?php echo base_url('Menu_Controller/terms'); ?>">Terms of Use</a></li>
            <li><a href="<?php echo base_url('Menu_Controller/contact'); ?>">Contact Us</a></li>
            <li>Need Help?<a href="#" data-toggle="modal" data-target="#myModal3"> / Write Us </a>  </li>
            <div class="clearfix"></div>
        </ul>
                            </nav>
                        </div><!-- /.navbar-collapse -->	
                    </nav>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
        
        <?php if(isset($msg)){
            echo $msg;
        }?>
        
        <!--- /footer-btm ---->
        <!--- banner ---->
        <div class="banner">
            <div class="container">
                <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Drive Green Sri Lanka - Best in Emission Tester  </h1>
            </div>
        </div>
        <div class="container"  id="booking">
            <div class="col-md-5 bann-info1 wow fadeInLeft animated" data-wow-delay=".5s">
                <i class="fa fa-columns"></i>
                <h3>TEST FAST AND ACCURATE</h3>
            </div>
            <div class="col-md-7 bann-info wow fadeInRight animated" data-wow-delay=".5s">
                <h2>Online Bookings its Free</h2>
                <div class="ban-top">
<!--                    <div class="bnr-left">
                        <label class="inputLabel">From</label>
                        <input class="city" type="text" value="Enter a city" onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'Enter a city';
                                        }" required=>
                    </div>-->
                     <div class="bnr-right">
                         Register with <a href="#" data-toggle="modal" data-target="#myModal" >
                         Green Drive free
                             </a>, its easy and fast
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="ban-bottom">
                    <div class="bnr-right">
                        <label class="inputLabel">Date of Journey</label>
                        <input class="date" id="datepicker" type="text" value="dd-mm-yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'dd-mm-yyyy';}" required=>
                    </div>
                    
                    <div class="clearfix"></div>
                    <!---start-date-piker---->
                    <link rel="stylesheet" href="css/jquery-ui.css" />
                    <script src="js/jquery-ui.js"></script>
                    <script>
                $(function () {
                    $("#datepicker,#datepicker1").datepicker();
                });
                    </script>
                    <!---/End-date-piker---->
                </div>
                <div class="sear">
                        <button class="seabtn" data-toggle="modal" data-target="#myModal5" >Please Login to proceed</button>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--- /banner ---->
        <!--- rupes ---->
        <div class="container">
            <div class="rupes">
                <div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                    <div class="rup-left">
                        <a href="offers.html"><i class="fa fa-usd"></i></a>
                    </div>
                    <div class="rup-rgt">
                        <h3>UP TO 50+ CENTERS</h3>
                        <h4><a href="offers.html">TEST SMART</a></h4>
                        <p>Call Now<br>Book Using Pay Money</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                    <div class="rup-left">
                        <a href="offers.html"><i class="fa fa-h-square"></i></a>
                    </div>
                    <div class="rup-rgt">
                        <h3>BEST IN SERVICE</h3>
                        <h4><a href="offers.html">ON CENTERS ACROSS ISLAND</a></h4>
                        <p>Offer more </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                    <div class="rup-left">
                        <a href="offers.html"><i class="fa fa-mobile"></i></a>
                    </div>
                    <div class="rup-rgt">
                        <h3>BOOKING ON THE GO</h3>
                        <h4><a href="offers.html">MOBILE</a></h4>
                        <p>book via the mobile<br>RESPONSIVE</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--- /rupes ---->
        <!---holiday---->
        <div class="container">
            <div class="holiday">
                <div class="col-md-3 holiday-left animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
                    <img src="images/4.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-md-6 holiday-mid animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
                    <h3>Message to Customers</h3>
                    <p>Private Guide and Driver in any language and in any departure date. For more information please contact us....</p>
                </div>
                <div class="col-md-3 holiday-left animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
                    <img src="images/5.jpg" class="img-responsive" alt="">
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!---/holiday---->
        <!---track---->
        <div class="container">
            <div class="track">
                <div class="col-md-6 track-right wow fadeInLeft animated" data-wow-delay=".5s">
                    <a href="track.html"><img src="images/map1.png" class="img-responsive" alt=""></a>
                </div>
                <div class="col-md-6 track-left wow fadeInRight animated" data-wow-delay=".5s">
                    <h3>PROTECT ENVIRONMENT</h3>
                    <p>First of its own kind,bus tracking feature on bus</p>
<!--                    <a href="track.html" class="learn">Learn More</a>-->
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--- /track ---->
        <!--- routes ---->
        <div class="routes">
            <div class="container">
                <div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
                    <div class="rou-left">
                        <a href="#"><i class="fa fa-truck"></i></a>
                    </div>
                    <div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
                        <h3>80000</h3>
                        <p>Testers</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 routes-left">
                    <div class="rou-left">
                        <a href="#"><i class="fa fa-user"></i></a>
                    </div>
                    <div class="rou-rgt">
                        <h3>1900</h3>
                        <p>Staff OPERATORS</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
                    <div class="rou-left">
                        <a href="#"><i class="fa fa-ticket"></i></a>
                    </div>
                    <div class="rou-rgt">
                        <h3>7,00,00,000+</h3>
                        <p>Booking SOLD</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--- /routes ---->
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
         <?php $this->load->view('_footer');?>
        <!--- /copy-right ---->
        <!-- sign -->
        <?php // $this->load->view('_model_signin');?>
        <!-- //sign -->
        <!-- signin -->
        <?php $this->load->view('_model_signup');?>
        <!-- //signin -->
        <!-- signin -->
        <?php $this->load->view('_model_login');?>
        <!-- //signin -->
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