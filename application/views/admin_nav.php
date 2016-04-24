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
                
            <!-- collapse the nav bar depending on screen size and offer thumb bars -->

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
                <ul class="nav navbar-nav navbar-right">
                    
                    <!-- Drop Down menu for create | view | edit and Delete car records -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-car" style="padding-right:5px;"></i>Car Database<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('site/add_car'); ?>">Add Car</a></li>
                            <li><a href="<?php echo site_url('site/car_db'); ?>">View | Edit | Delete</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-newspaper-o" style="padding-right:5px;"></i>News Database<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('site/news_page'); ?>">Add News Story</a></li>
                            <li><a href="<?php echo site_url('site/news_db'); ?>">View | Edit | Delete</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-users" style="padding-right:5px;"></i>User Database<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('form/users'); ?>">Add User Account</a></li>
                            <li><a href="<?php echo site_url('form/users_db'); ?>">View | Edit | Delete</a></li>
                        </ul>
                    </li>
					
					<?php if ($this->session->userdata('username')) { ?>
					<li><p class="navbar-text">Oh Snap! You're logged in, <span style="color:#FFF;"><?php echo $this->session->userdata('username'); ?><?php echo $this->session->userdata('privilage'); ?></span></p></li>
					<li><a href="<?php echo site_url('login_controller/logout');?>"><span class="glyphicon glyphicon-off" style="padding-right:5px;"></span>Logout</a></li>
					<?php } ?>
					
					

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>