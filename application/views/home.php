<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Dealership Portal",$buffer);
echo $buffer;
?>

<header class="header-strip">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline">Family Run Car Dealership</h1>
                </div>
            </div>
        </div>
    </header>
<div class="container">

<div class="col-md-12">
<H2>Welcome to Taunton Used Car Dealership</h2>
<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</h4>
<p><h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</h4></p>

</div>

<?php if(isset($records)): foreach($records as $row) : ?>



<div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo base_url("img/story_holder.jpg"); ?>" alt="">
                    <div class="caption">
                        <h3><?php echo $row->article_title ?></h3>
                        <H5><?php echo $row->post_time ." | ". $row->user_id?></h5>
                        <p><?php echo $row->article_body ?></p>
                        <p>
                            <a class="btn btn-primary" href="#">View Story <span class="glyphicon glyphicon-chevron-right"></span></a>
                        </p>
                    </div>
                </div>
            </div>


        
        <!-- /.row -->
<?php endforeach; ?>
<?php else : ?>
<h2>No Records Returned</h2>
<?php endif; ?>


<hr>    
<?php include 'footer.php' ?>
</div>