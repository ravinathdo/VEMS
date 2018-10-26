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
                            <h3>Customer Registration</h3>
                            <form action="<?php echo base_url(); ?>Customer_Controller/customerRegistration" method="post">

                                <div class="form-group">
                                    <label for="first_name" class="control-label col-xs-4">First Name</label> 
                                    <div class="col-xs-8">
                                        <input id="first_name" name="first_name" type="text" class="form-control field-gap">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="last_name" class="control-label col-xs-4">Last Name</label> 
                                    <div class="col-xs-8">
                                        <input id="last_name" name="last_name" type="text" class="form-control field-gap">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nic" class="control-label col-xs-4">NIC</label> 
                                    <div class="col-xs-8">
                                        <input id="nic" name="nic" type="text" class="form-control field-gap">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile_number" class="control-label col-xs-4">Mobile Number</label> 
                                    <div class="col-xs-8">
                                        <input id="mobile_number" name="mobile_number" type="text" class="form-control field-gap">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label col-xs-4">Email</label> 
                                    <div class="col-xs-8">
                                        <input id="email" name="email" type="text" class="form-control field-gap">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label col-xs-4">Password</label> 
                                    <div class="col-xs-8">
                                        <input id="pword" name="pword" type="password" class="form-control field-gap" placeholder="Minimum 6 characters">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label col-xs-4">Retype Password</label> 
                                    <div class="col-xs-8">
                                        <input id="repword" name="repword" type="password" class="form-control field-gap">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="control-label col-xs-4">Address</label> 
                                    <div class="col-xs-8">
                                        <textarea id="address" name="address" cols="40" rows="5" class="form-control field-gap"></textarea>
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="col-xs-offset-4 col-xs-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Sign Up</button>
                                    </div>
                                </div>
                            </form>

                            <style type="text/css">
                                .field-gap{
                                    margin-bottom: 5px;
                                }
                            </style>


                        </div>
                        <p>By logging in you agree to our <a href="terms.html">Terms and Conditions</a> and <a href="privacy.html">Privacy Policy</a></p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>