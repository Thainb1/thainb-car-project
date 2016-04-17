<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Login Page",$buffer);
echo $buffer;
?>

<!-- Page Content -->
    <div class="container">
			<!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>Please log in to your account</h1>
            <p>You can log into your user account here, if you have not previously created an account with us, please do so by clicking the following button</p>
            <p><a href="sign_up" class="btn btn-primary btn-large">Sign Up Page</a></p>
        </header>
	<hr>
	
		<!-- Sign up Form -->
		        <div class="panel panel-primary margin-bottom-40">
		        <div class="panel-heading">
		        	<h3 class="panel-title"><i class="fa fa-tasks"></i> Login to your current Account</h3>
		        </div>
		        <div class="panel-body">
		       
		    <?php echo form_open('login_controller/validate_credentials');?> 
			
		        <div class="form-group">
			        <label for = "uname">Username:</label>
			        <input type="text" class="form-control" id="uname"  name="uname" placeholder="Enter your Username here">
		        </div>
		        <div class="form-group">
			        <label for = "pword">Password:</label>
			        <input type="text" class="form-control" id="pword" name="pword" placeholder="Enter your Password here">
		        </div>
		        <button type="submit" class="btn btn-primary">Login</button>
				<a class="btn btn-default" href="<?php echo base_url("index.php/login/signup"); ?>" style = "margin-right:10px;">Create Account</a>
				
			<?php echo form_close(); ?>
			
		
		
		</div>
		</div>
	
		

	<hr>
	    
	 <?php include 'footer.php' ?>
	 </div>
   