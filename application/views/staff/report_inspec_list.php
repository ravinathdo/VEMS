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
            <div class="col-md-2"></div>
            <div class="col-md-8">

                <div class="panel panel-success">
                    <div class="panel-heading ">Test Detail Report</div>
                    <div class="panel-body">

                        <form action="<?= base_url('Report_Controller/inspecListReport') ?>" method="post">

                            <div class="row">
                                <div class="col-md-4"><?php if ($this->session->userdata('userbean')->role_code == 'ADMIN') { ?>
                                        Center Name<select id="centerid" required="" name="centerid" >
                                            <option value="">--select--</option>
                                            <?php
                                            foreach ($centerList as $rows) {
                                                ?> <option value="<?= $rows->id ?>|<?= $rows->center_name ?>"><?= $rows->center_name ?></option> <?php
                                            }
                                            ?>
                                        </select>
                                    <?php } ?></div>
                                <div class="col-md-4"> From <input type="date" name="fromDate" required=""/></div>
                                <div class="col-md-4">      To <input type="date" name="toDate" required=""/>
                                    <input type="submit" value="Search" /></div>
                            </div>
                        </form> 


                    </div>
                </div>


                <div  id="printMe">
                    <?php
                    if (isset($reportData)) {
//                    echo '<tt><pre>' . var_export($this->session->userdata('centerDetail'), TRUE) . '</pre></tt>';
                        ?>
                        <center>
                            <h2>Drive Green</h2>
                            <?php
                            if ($this->session->userdata('userbean')->role_code == 'ADMIN') {
                                if (isset($centerName)) {
                                    echo '<h2>'.$centerName . '-Test Detail Report</h2>';
                                }
                            } else {
                                ?>
                                <h2><?= $this->session->userdata('centerDetail')[0]->center_name ?>-Test Detail Report</h2>

                                <?php
                            }
                            ?>
                            From : <?= $fromDate ?> To: <?= $toDate ?> 
                            <table border="1" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Inspection No</th>
                                        <th>Vehicle No</th>
                                        <th>Vehicle Type</th>
                                        <th>Customer Name</th>
                                        <th>Status Code</th>
                                        <th>Amount</th>
                                        <th>Date Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($reportData)
                                        foreach ($reportData as $value) {
                                            ?>
                                            <tr>
                                                <td><?= $value->id ?></td>
                                                <td><?= $value->reg_no ?></td>
                                                <td><?= $value->type_code ?></td>
                                                <td><?= $value->first_name ?></td>
                                                <td><?= $value->inspec_result ?></td>
                                                <td><?= $value->amount ?></td>
                                                <td><?= $value->created_datetime ?></td>
                                            </tr>
                                        <?php }
                                    ?>

                                </tbody>
                            </table>
                        </center>
                        <input type="button" value="Print" onclick="printDiv('printMe')" />
                        <?php
                        date_default_timezone_set('Asia/Colombo');
                        $today = date("Y-m-d H:m:s", time());
                        echo $today;
                    }
                    ?>
                </div>

            </div>


            <script type="text/javascript">
                function printDiv(divId) {
                    var printContents = document.getElementById(divId).innerHTML;
                    var originalContents = document.body.innerHTML;
                    document.body.innerHTML = "<html><head><title></title></head><body>" + printContents + "</body>";
                    window.print();
                    document.body.innerHTML = originalContents;
                }
            </script>


            <div class="col-md-2"></div>
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

