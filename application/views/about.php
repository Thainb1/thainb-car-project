<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","About Us",$buffer);
echo $buffer;
?>

 <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About Us
                    <small>Get to know what drives us!</small>
                </h1>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="<?php echo base_url("img/about_holder.png"); ?>" alt="">
            </div>
            <div class="col-md-6">
                <h2>Steering you to the right choice</h2>
                <p>Taunton Family car company has been a thriving dealership since the early 2000's; with over 16 years experience in the automotive industry, we dont only offer a fine range of used vehicles but many industry leading services to keep you and your new car happy for a long, long time.</p>
                <p>Our staff have customer values at their very hearts and as an expanding family business, our growth hasnt happend by chance; we have listened to and learnt from our customers over nearly two decads to deliver the finest customer service, the best quality products and all at a highly competative cost.</p>
                <p>This section of the website is to introduce you to some of the team here at Taunton faily car company and to let you know you are in safe hands, contact us or come and see us to view our fine range of vehicles or stop in for a cup of tea and a chat about our shared interest; quality cars!</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Team Members -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Team</h2>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail2">
                    <img class="test-image" src="<?php echo base_url("img/worker1.jpg"); ?>" alt="Ben">
                    <div class="caption">
                        <h3 style="margin-top:5px;">Employee Example 1<br>
                            <small>Example Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail2">
                    <img class="test-image" src="<?php echo base_url("img/worker2.jpg"); ?>" alt="Steve">
                    <div class="caption">
                        <h3>Employee Example 2<br>
                            <small>Example Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail2">
                    <img class="test-image" src="<?php echo base_url("img/worker3.jpg"); ?>" alt="G">
                    <div class="caption">
                        <h3>Employee Example 3<br>
                            <small>Example Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>   
        <!-- /.row -->

<hr>    
<?php include 'footer.php' ?>
</div>