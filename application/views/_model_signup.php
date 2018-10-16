<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
            </div>
            <section>
                <div class="modal-body modal-spa">
                    <div class="login-grids">
                        <div class="login">
                            <div class="login-left">
                                Default password will be same as the NIC
                            </div>
                            <div class="login-right">
                                <form action="<?php echo base_url(); ?>Customer_Controller/customerRegistration" method="post">
                                    <h3>Create your account </h3>
                                    <input type="text" placeholder="First Name"  required="" name="first_name">
                                    <input type="text" placeholder="Last Name"  required="" name="last_name">
                                    <input type="text" placeholder="NIC"  required="" name="nic">
                                    <input type="text" placeholder="Mobile Number"  required="" name="mobile_number">
                                    <br><br>
                                    <input type="email" class="form-control" placeholder="Email"  required="" name="email">
                                    <br>
                                    <textarea name="address" placeholder="Address" class="form-control"> </textarea>
                                    <input type="submit" value="CREATE ACCOUNT">
                                </form>
                            </div>
                            <div class="clearfix"></div>								
                        </div>
                        <p>By logging in you agree to our <a href="terms.html">Terms and Conditions</a> and <a href="privacy.html">Privacy Policy</a></p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>