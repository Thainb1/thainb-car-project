<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Contact Us",$buffer);
echo $buffer;
?>

<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact Us
                    <small>We're always pleased to hear from you!</small>
                </h1>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2509.490154580131!2d-3.1203403840268185!3d51.02556725363813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486df46849c7711f%3A0x9d557efe28b643b1!2sStaplegrove+Rd%2C+Taunton%2C+Somerset+TA1+1DE!5e0!3m2!1sen!2suk!4v1461709811257" width="650" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            
                <!-- Embedded Google Map -->
                <!--<iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>-->
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    Staplegrove Road<br>Taunton, Somerset, TA2 6MB<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: (01823) 366470</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">ben@familycars.co.uk</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
                
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Send us a Message</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

        </div>
        <!-- /.row -->







<hr>    
<?php include 'footer.php' ?>
</div>