<?php
ob_start();
include("staff_nav.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Staff Dashboard",$buffer);
echo $buffer;
?>
<div class = "container">

<!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1><i class="fa fa-tachometer" style="padding-right:10px;"></i>Staff Dashboard</h1>
            <p>You are logged in as +STAFF NAME+ All amendments will be registerd to this account and are monitored. If you are not +STAFF NAME+ Then please log out and use your unique credentials.</p>
        </header>

        <hr>

<!-- Content Row -->
    <div class = "row_container">
        <div class="row">

        	<!-- First box -->
            <div class="col-md-6">
            
            <div class = "circle_shape"><i class="fa fa-car fa-3x"></i></div>
                <h2>Car Database</h2>
                <p>There are three dropdown menues on the navigation bar above. The "Car Database" allows you to view the current stock, add a vehicle to the database, edit a vehicles information, or delete it from current stock. These changes will be imideiate, so please ensure due care has been taken with the quality throughout the input process. There is form validation, however, this will not mitigate all user error.</p>
                <a class="btn btn-default" href="#">More Info</a>
            </div>

            <!-- Second box -->
            <div class="col-md-6">
           
            <div class = "circle_shape"><i class="fa fa-newspaper-o fa-3x"></i></div>
                <h2>News Database</h2>
                <p>The second dropdown menu "News Database" allows you to view current news stories, add an article to the database, edit an article, or delete one from current news bank. These changes will be imideiate, so please ensure due care has been taken with the quality throughout the input process. There is form validation, however, this will not mitigate all user error. Articles will appear on the home page so please consider content.</p>
                <a class="btn btn-default" href="#">More Info</a>
            </div>
        </div>
    </div>
        <!-- /.row -->
<hr>
<?php include 'footer.php' ?>
</div>
