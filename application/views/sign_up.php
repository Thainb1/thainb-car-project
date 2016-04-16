<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Sign Up Form",$buffer);
echo $buffer;
?>



<!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>Customer Sign Up </h1>
            <p>Sign up to our mailing and to enable exclusive web features!</p>
        </header>

        <hr>

            <!-- Sign up Form -->
                <div class="panel panel-primary margin-bottom-40">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-tasks"></i> Create an Account</h3>
                    </div>
                    <div class="panel-body">

                    <?php echo form_open('form');?> 

                            <div class="form-group">
                                <label for = "fname">First Name:</label>
                                <input type="text" class="form-control" id="fname" name="fname" value="<?php echo set_value('fname'); ?>" placeholder="Enter your forename" />
                                <p><?php echo form_error('fname'); ?></p>
                            </div>

                            <div class="form-group">
                                <label for = "sname">Surname:</label>
                                <input type="text" class="form-control" id="sname" name="sname" value="<?php echo set_value('sname'); ?>" placeholder="Enter your Surname"  /> 
                                <p><?php echo form_error('sname'); ?></p>
                            </div>

                            <div class="form-group">
                                <label for = "uname">Username:</label>
                                <input type="text" class="form-control" id="uname" name="uname" value="<?php echo set_value('uname'); ?>" placeholder="Select a Username" />
                                <p><?php echo form_error('uname'); ?></p>
                            </div>

                            <div class="form-group">
                                <label for = "pword">Password:</label>
                                <input type="password" class="form-control" id="pword" name="pword" value="<?php echo set_value('pword'); ?>" placeholder="Select a Password"  />
                                <p><?php echo form_error('pword'); ?></p>
                            </div>

                            <div class="form-group">
                                <label for = "rpword">Re-enter Password:</label>
                                <input type="password" class="form-control" id="rpword" name="rpword" value="<?php echo set_value('rpword'); ?>" placeholder="Please confirm password" />
                                <p><?php echo form_error('rpword'); ?></p>
                            </div>

                            <div class="form-group">
                                <label for = "email-ad">Email Address:</label>
                                <input type="email" class="form-control" id="email-ad" name="email-ad" value="<?php echo set_value('email-ad'); ?>" placeholder="E.g. - example@example.com" />
                                <p><?php echo form_error('email-ad'); ?></p>
                            </div>

                            <div class="form-group">
                                <label for = "home-ph">Home Telephone Number:</label>
                                <input type="tel" class="form-control" id="home-ph" name="home-ph" value="<?php echo set_value('home-ph'); ?>" placeholder="E.g. - 01823 366470" />
                                <p><?php echo form_error('home-ph'); ?></p>
                            </div>

                            <div class="form-group">
                                <label for = "mobile-ph">Mobile Phone Number:</label>
                                <input type="tel" class="form-control" id="mobile-ph" name="mobile-ph" value="<?php echo set_value('mobile-ph'); ?>" placeholder="E.g. - 07985641236" />
                                <p><?php echo form_error('mobile-ph'); ?></p>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                            
                            
                        </form>

                        <!-- <?php echo form_close();?> -->
                    
                    </div>
                        
                </div>
                <!-- End Sign Up Form -->
<!--
<?php echo form_open('form'); ?>

<h5>First Name</h5>
<input type="text" name="fname" value="" size="50" />
<?php echo form_error('fname'); ?>

<h5>Second Name</h5>
<input type="text" name="sname" value="" size="50" />
<?php echo form_error('sname'); ?>

<h5>Username</h5>
<input type="text" name="uname" value="" size="50" />
<?php echo form_error('uname'); ?>

<h5>Password</h5>
<input type="password" name="pword" value="" size="50" />
<?php echo form_error('pword'); ?>

<h5>Password Re-Check</h5>
<input type="password" name="rpword" value="" size="50" />
<?php echo form_error('rpword'); ?>

<h5>Email Address</h5>
<input type="text" name="email-ad" value="" size="50" />
<?php echo form_error('email-ad'); ?>

<h5>Home Phone</h5>
<input type="text" name="home-ph" value="" size="50" />
<?php echo form_error('home-ph'); ?>

<h5>Mobile Phone</h5>
<input type="text" name="mobile-ph" value="" size="50" />
<?php echo form_error('mobile-ph'); ?>

<div><input type="submit" value="Submit" /></div>

</form>

-->
        <hr>
    
    <?php include 'footer.php' ?>
    </div>
    <!-- /.container -->


