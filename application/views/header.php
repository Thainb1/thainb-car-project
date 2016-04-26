<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>%TITLE%</title>
	
	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="<?php echo base_url("extras/css/bootstrap.min.css"); ?>" />
	
    <!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url("extras/css/general.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("extras/css/heroic-features.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("extras/css/font-awesome.min.css"); ?>" />
  
  
	<link rel="stylesheet" href="<?php echo base_url("extras/sss/sss.css"); ?>" type="text/css" media="all">
	
	
	
	
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>



    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('site/news'); ?>">Family Run Car Dealership</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <?php echo anchor('Site/showroom', 'Show Room', 'class="link-class"') ?>
                    </li>
                    <li>
                        <?php echo anchor('Site/contact', 'Contact Us', 'class="link-class"') ?>
                    </li>
                    <li>
                        <?php echo anchor('Site/about', 'About us', 'class="link-class"') ?>
                    </li>
                    <li>
                        <?php echo anchor('form/users_db', 'Other Services', 'class="link-class"') ?>
                    </li>
                </ul>
				<ul class="nav navbar-nav navbar-right">
				
				<?php if ($this->session->userdata('username')) { ?>
					<li>You are logged in</li>
					<li><a href="<?php echo site_url('login_controller/logout');?>"><span class="glyphicons glyphicons-door"></span>Logout</a></li
				<?php } else { ?>
					<li><a href="<?php echo site_url('site/sign_up'); ?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="<?php echo site_url('site/log_in'); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				<?php } ?>
				
				</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>