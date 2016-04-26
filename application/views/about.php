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
                <img class="img-responsive big-pic" src="<?php echo base_url("img/about_holder.jpg"); ?>" alt="">
            </div>
            <div class="col-md-6 about-align">
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
                        <h3 style="margin-top:5px;">Michael Vickers<br>
                            <small>Senior Sales Assistant</small>
                        </h3>
                        <p>Michael has been with us for over 15 years now and his customer service experience is second to none. Come and let Michael show you our latest stock!</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail2">
                    <img class="test-image" src="<?php echo base_url("img/worker2.jpg"); ?>" alt="Steve">
                    <div class="caption">
                        <h3>Alfie Tinker<br>
                            <small>Head of servicing and Parts</small>
                        </h3>
                        <p>Alfie has roots in the community and is known for his work ethic and attention to detail. He has been head of parts and servicing for over 10 years.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail2">
                    <img class="test-image" src="<?php echo base_url("img/worker3.jpg"); ?>" alt="G">
                    <div class="caption">
                        <h3>Olivia Makita<br>
                            <small>Head Mechanic</small>
                        </h3>
                        <p>If Mia cant fix it, its not worth fixing! Not in the market for a new car? come and let Mia take a look and you'll be back on the road in no time!</p>
                        
                    </div>
                </div>
            </div>   
        <!-- /.row -->

<hr>    
<?php include 'footer.php' ?>
</div>