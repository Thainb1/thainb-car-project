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
<!--
<h2>Account Login</h2>
		<form class = "form-inline">
		<?php echo form_open('site/login');?>
	
		<p>
			<label class = "test"  for = "fname">Username:</label>
			<input type = "text" class = "form-control" name="uname" id="uname" placeholder="Enter Username"/> <?php echo form_error('uname'); ?>
			
		</p>
		
		<p>
			<label class = "test"  for = "sname">Password:</label>
			<input type = "password" class = "form-control" name="pword" id="pword" placeholder="Enter Password"/> <?php echo form_error('pword'); ?>
		</p>
		<p>
			<input type = "submit" value="Login" class = "btn btn-default"/>
		</p>
		

		<?php echo form_close();?>
		</form> -->
	
		
			
			<!-- Sign up Form -->
		        <div class="panel panel-primary margin-bottom-40">
		        <div class="panel-heading">
		        	<h3 class="panel-title"><i class="fa fa-tasks"></i> Login to your current Account</h3>
		        </div>
		        <div class="panel-body">
		       
		    <?php echo form_open('site/login');?> 
		    <form class="margin-bottom-40" role="form">
		    

		        <div class="form-group">
			        <label for = "fname">First Name:</label>
			        <input type="text" class="form-control" id="fname" placeholder="Enter your forename">
		        </div>
		        <div class="form-group">
			        <label for = "sname">Surname:</label>
			        <input type="text" class="form-control" id="sname" placeholder="Enter your Surname">
		        </div>
		        <button type="submit" class="btn btn-primary">Login</button>
		
		</form>
		</div>
		</div>

	<hr>
	    
	 <?php include 'footer.php' ?>
	 </div>
   