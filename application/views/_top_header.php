<div class="container">
                <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
                    <li class="hm"><a href="index.html"><i class="fa fa-home"></i></a></li>
<!--                    <li class="prnt"><a href="javascript:window.print()">Print/SMS Ticket</a></li>-->

                </ul>
                <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
                    <li class="tol">
                        <?php
            if ($this->session->userdata('userbean')) {
                $userbean = $this->session->userdata('userbean');
            } else {
                //if invalid session user get redirect to login
                header("Location:" . site_url('User_Controller/logout'));
            }
            ?>Welcome <?= $userbean->firstname;?> <?= $userbean->lastname;?></li>				
                    <li class="sigi"><a href="<?php echo site_url('User_Controller/logout');?>"  data-target="#myModal4" > [<?= $userbean->rolecode;?>] | Logout</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>

