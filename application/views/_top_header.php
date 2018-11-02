<?php if(null !== $this->session->userdata('userbean')){ ?>
    
    <div class="container">
    <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
        <li class="hm"><a href="#"><i class="fa fa-home"></i></a></li>
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
            ?> Welcome <?= $userbean->first_name; ?>
        <li class="sigi">
            
            [<?= $userbean->role_code; ?>]
            <a href="<?php echo site_url('User_Controller/logout'); ?>"  data-target="#myModal4" > 
                 | Logout</a>
        </li>

        </li>				
    </ul>
    <div class="clearfix"></div>
</div>
<?php }else{  ?>
    
<div class="container">
    <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
        <li class="tol">Telephone Number : 123-4568790</li>				
        <li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Sign Up</a> </li> 
        <li class="sigi"> | <a href="#" data-toggle="modal" data-target="#myModal5" > Drive Green Login</a></li>
    </ul>
    <div class="clearfix"></div>
</div>

<?php }?>





