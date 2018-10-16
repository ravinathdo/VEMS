<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
            </div>
            <div class="modal-body modal-spa">
                <div class="login-grids">
                    <div class="login">
                        <div class="login-left">
                           
                        </div>
                        <div class="login-right">
                            <?php echo form_open('Customer_Controller/customerLogin'); ?>
                            <h3>Signin with your account x</h3>
                            <input type="text" name="email" >	
                            <input type="password" name="password" value="Password" required="">	
                            <h4><a href="#">Forgot password</a></h4>
                            <div class="single-bottom">
                                <input type="checkbox" id="brand" value="">
                                <label for="brand"><span></span>Remember Me.</label>
                            </div>
                            <input type="submit" value="SIGNIN">
                            <?php echo form_close(); ?>
                        </div>
                        <div class="clearfix"></div>								
                    </div>
                    <p>By logging in you agree to our <a href="terms.html">Terms and Conditions</a> and <a href="privacy.html">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </div>
</div>