<?xml version="1.0" encoding="UTF-8" standalone="no" ?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
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
                    <div class="panel-heading ">Center Creation</div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="<?php echo site_url('Center_Controller/add') ?>" method="post">
                            <fieldset>

                                <!-- Form Name -->
                                <span class="mando-msg">* Fields are mandatory</span>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="center_name">Center Name<span class="mando-msg">*</span></label>  
                                    <div class="col-md-8">
                                        <input id="center_name" name="center_name" required="" pattern="^[a-zA-Z\s]{1,30}$" title="Only letters are allowed, max limit 30" type="text" placeholder="Center Name" class="form-control input-md">

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="mobile">Mobile</label>  
                                    <div class="col-md-8">
                                        <input id="mobile" name="mobile" type="number" placeholder="Mobile" class="form-control input-md" pattern="^[0-9]{10}$" title="Only numbers are allowed, length 10" >
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="email">Email</label>  
                                    <div class="col-md-8">
                                        <input id="email" name="email" type="text" placeholder="email" class="form-control input-md">

                                    </div>
                                </div>

                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="address">Address</label>
                                    <div class="col-md-8">                     
                                        <textarea class="form-control" id="address" name="address" ></textarea>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="district_name">District Name<span class="mando-msg">*</span></label>  
                                    <div class="col-md-8">
                                        <select id="status_code" required="" name="district_name" class="form-control">
                                            <option value="">--select district--</option>
                                            <?php foreach ($districtList as $row) {
                                                ?> 
                                                <option value="<?= $row->district_name ?>"><?= $row->district_name ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
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
                                        <button id="singlebutton" name="singlebutton" class="btn btn-success">Add Center</button>
                                    </div>
                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>



            </div>
            <div class="col-md-8">
<?php
if(isset($msg)){
 echo $msg;   
} ?>
                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Center</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($centerList as $value) {
                            ?> 
                            <tr>
                                <td><?= $value->center_name ?></td>
                                <td>Telephone</td>
                                <td>Email</td>
                                <td><?= $value->status_code ?></td>
                                <td><?= $value->district_name ?></td>
                                <td><a class="btn-info btn-sm" href="<?= base_url('Center_Controller/updateStatus')?>/<?= $value->status_code ?>/<?= $value->id ?>"><?= $value->status_code ?></a>
                                    </td>
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
                $('#example').DataTable({
                    "scrollY": "200px",
                    "scrollCollapse": true,
                    "paging": false
                });
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

