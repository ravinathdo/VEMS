<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-info">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
                    </div>
                    <div class="modal-body modal-spa">
                        <div class="login-grids">
                            <div class="login">
                                <div class="login-left">
                                  Drive Green Users Login
                                </div>
                                <div class="login-right">
                                    <?php echo form_open('User_Controller/userLogin');?>
                                        <h3>Signin with your account </h3>
                                        <input type="text" name="email" value="Enter your Email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                                                    this.value = 'Enter your mobile number or Email';}" required="">	
                                                                                                <input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                                                    this.value = 'Password';}" required="">	
                                        <h4><a href="#">Forgot password</a></h4>
                                        <div class="single-bottom">
                                            <input type="checkbox" id="brand" value="">
                                            <label for="brand"><span></span>Remember Me.</label>
                                        </div>
                                        <input type="submit" value="SIGNIN">
                                    <?php echo form_close();?>
                                </div>
                                <div class="clearfix"></div>								
                            </div>
                            <p>By logging in you agree to our <a href="terms.html">Terms and Conditions</a> and <a href="privacy.html">Privacy Policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>