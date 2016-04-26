<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Car Showroom",$buffer);
echo $buffer;
?>

<!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>Welcome to our Car Showroom!</h1>
            <p>Below you will find a list of our current stock, new cars will be added daily so please check back regularly, you may also benefit from signing up to our mailing list for information of deals and additional website functionalities!</p>
            <p><a class="btn btn-primary btn-large" href="<?php echo base_url("site/contact"); ?>">Contact Sales Team</a>
            </p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Current Car Stock</h3>
            </div>
        </div>
        
		<!-- /.row -->
        <!-- Each Car Record -->
        <div class="row text-center">

		<!-- Write PHP around this container to produce the information for each record in one of these display containers, LOOP -->
		<?php if(isset($records)): foreach($records as $row) : ?>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo base_url("img/place_holder.jpg"); ?>" alt="Place Holder">
                    <div class="caption">
                        <?php echo '<input type="hidden" name="browser" value="'.$row->car_id.'">' ?>
                        <h4><?php echo $row->car_year ." | ". $row->car_make ." | ". $row->car_model; ?></h4>
                        <p class = "price"><?php echo "£".$row->car_price ?></p>
                        <p>
                            <a href="#" class="btn btn-primary">Request Call</a> 
                            <!--<a href="<?php echo site_url("site/view_item"); ?>" class="btn btn-default">More Info</a> -->
                            <a class="btn btn-default" href="<?php echo base_url("index.php/site/view_item/$row->car_id"); ?>">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

			<?php endforeach; ?>
        <?php else : ?>
            <h2>No Records Returned</h2>
        <?php endif; ?>


        </div>
        <!-- /.row -->

        <hr>
    
    <?php include 'footer.php' ?>
    </div>
    <!-- /.container -->

