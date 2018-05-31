<!--
Author: Indeewara
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>VEMS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="" />
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
            $this->load->view('_top_pre_header.php');
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
            <div class="col-md-2">.col-md-8</div>
            <div class="col-md-6">
                <?php
                if (isset($msg)) {
                    echo $msg;
                }
                ?>
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>Customer_Controller/customerRegistration">
                    <span class="mando-msg">* fields are mandatory</span>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">first_name</label>
                        <div class="col-sm-10">
                            <input type="text" name="first_name" class="form-control" id="inputEmail3" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">last_name</label>
                        <div class="col-sm-10">
                            <input type="text" name="last_name" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">nic</label>
                        <div class="col-sm-10">
                            <input type="text" name="nic" class="form-control" id="inputPassword3">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Register</button>
                        </div>
                    </div>
                </form>


                <table class="table">
                    <tbody>
                        <?php
                        if ($customer_list != FALSE) {
                            foreach ($customer_list as $rows) {
                                ?>
                                <tr>
                                    <td><?= $rows->first_name; ?></td>
                                    <td><?= $rows->first_name; ?></td>
                                    <td><?= $rows->first_name; ?></td>
                                    <td><?= $rows->first_name; ?></td>
                                </tr>

                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>

            </div>
            <div class="col-md-4">.col-md-4</div>
        </div>


        <!--- footer-top ---->
        <div class="footer-top">
            <div class="container">
<?php // $this->load->view('_footer_branch'); ?>
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

