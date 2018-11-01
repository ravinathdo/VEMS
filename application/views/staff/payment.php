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
                <table border="0">
                    <tbody>
                        <tr>
                            <td>Reg No</td>
                            <td><?= $inspectionDetail->reg_no ?></td>
                        </tr>
                        <tr>
                            <td>Type</td>
                            <td><?= $inspectionDetail->type_code ?></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col-md-4">
                <table border="0">

                    <tbody>
                        <tr>
                            <td>engine_type</td>
                            <td><?= $inspectionDetail->engine_type ?></td>
                        </tr>
                        <tr>
                            <td>chassis_number</td>
                            <td><?= $inspectionDetail->chassis_number ?></td>
                        </tr>
                        <tr>
                            <td>engine_number</td>
                            <td><?= $inspectionDetail->engine_number ?></td>
                        </tr>
                        <tr>
                            <td>silencer_leak</td>
                            <td><?= $inspectionDetail->silencer_leak ?></td>
                        </tr>
                        <tr>
                            <td>oil_leak</td>
                            <td><?= $inspectionDetail->oil_leak ?></td>
                        </tr>
                        <tr>
                            <td>air_leak</td>
                            <td><?= $inspectionDetail->air_leak ?></td>
                        </tr>
                        <tr>
                            <td>fuel_tank_cap</td>
                            <td><?= $inspectionDetail->fuel_tank_cap ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <table border="0">
                    <tbody>
                        <tr>
                            <td>plug_top</td>
                            <td><?= $inspectionDetail->plug_top ?></td>
                        </tr>
                        <tr>
                            <td>engine_idle_RPM</td>
                            <td><?= $inspectionDetail->engine_idle_RPM ?></td>
                        </tr>
                        <tr>
                            <td>abnormal_vibration</td>
                            <td><?= $inspectionDetail->abnormal_vibration ?></td>
                        </tr>
                        <tr>
                            <td>water_leakages</td>
                            <td><?= $inspectionDetail->water_leakages ?></td>
                        </tr>

                        <tr>
                            <td>created_datetime</td>
                            <td><?= $inspectionDetail->created_datetime ?></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

        <?php if ($inspectionDetail->inspec_result == 'ACCEPT') {
            ?>
            <div class="row">
                <div class="col-md-12">
              <h1><?= $inspectionDetail->inspec_result ?> </h1>
            


                    <form action="<?= base_url('Payment_Controller/payment') ?>" method="post">
                        <div class="form-group">
                            <label for="text1" class="control-label col-xs-4">Payment Amount</label> 
                            <div class="col-xs-8">
                                <input id="text1" name="vehicle_id" type="hidden" value="<?= $inspectionDetail->vehicle_id ?>" class="form-control">
                                <input id="text1" name="inspection_id" type="hidden" value="<?= $inspectionDetail->id ?>" class="form-control">
                                <input id="text1" name="amount" type="hidden" value="<?= $charge_amount ?>" class="form-control">
                                <h2><?= $charge_amount ?>/=</h2>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="col-xs-offset-4 col-xs-8">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        <?php } else if ($inspectionDetail->inspec_result == 'PAID') {
            ?>
        
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                
           <h1><?= $inspectionDetail->inspec_result ?> </h1>
                <form class="form-horizontal">
  <div class="form-group">
    <label for="text1" class="control-label col-xs-4">Paid amount</label> 
    <div class="col-xs-8">
      <input id="text1" name="text1" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="text" class="control-label col-xs-4">RESULT</label> 
    <div class="col-xs-8">
      <input id="text" name="text" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="s" class="control-label col-xs-4">Expire Date</label> 
    <div class="col-xs-8">
      <input id="s" name="s" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="col-xs-offset-4 col-xs-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form></div>
            <div class="col-md-4"></div>
        </div>

            <?php }
        ?>




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

