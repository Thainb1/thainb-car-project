<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Car View",$buffer);
echo $buffer;
?>

<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2" style="margin-top:30px; ?>');">

            <div class="thumbnail" style="padding:10px; margin-bottom:0; background-image: url('<?php echo base_url("img/main_car.jpg"); ?>">
				<div class="slider">
				
				<?php if(!isset($data['pics'])) { ?>
				<?php foreach($pics as $data) : ?>
					<img src="<?php echo $data->image_src; ?>" alt="">
				<?php endforeach; ?>
				<?php } ?>
				</div>
                <div class="row" style="margin-top:10px;">
			
				</div>
			</div>
			
<?php if(isset($records)): foreach($records as $row) : ?>

        <div class="caption-full" style="margin:10px 0px;">
                    <h4 class="pull-right"><?php echo "£".$row->car_price; ?></h4>
                    <h4><a href="#"><?php echo $row->car_year ." ". $row->car_make ." ". $row->car_model; ?></a>
                    </h4>
        </div>
                   
           <div class="panel panel-primary margin-top-40">
		        	<div class="panel-heading">
		        	<h3 class="panel-title"><i class="fa fa-car" style="padding-right:5px;"></i>Vehicle Details</h3>
		        	
		        	</div>
		        	<div class="table-responsive center-table">
  					<table class="table">
  						<thead>
	      					<tr>
						        <th>Car ID</th>
						        <th>Car Make</th>
						        <th>Car Model</th>
						        <th>Age</th>
						        <th>Miles</th>
						        <th>Transmission</th>
	      					</tr>
    					</thead>
						
    					<tbody>
					      	<tr>
					      		<td><?php echo $row->car_id; ?></td>
								<td><?php echo $row->car_make; ?></td>
								<td><?php echo $row->car_model; ?></td>
								<td><?php echo $row->car_year; ?></td>
								<td><?php echo $row->car_miles; ?></td>
								<td><?php echo $row->car_transmission; ?></td>	
					      </tr>
					    </tbody>
  					</table>
  					</div>

		        <div class="panel-body">

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                	
                	<p><a href="sign_up" class="btn btn-primary btn-large">Speak to Sales Representative</a><a href="sign_up" class="btn btn-default btn-large" style="margin-left:10px;"><i class="fa fa-star-o"></i></a></p>
                


                </div>
            	
            </div>
		</div>
<?php endforeach; ?>
        <?php else : ?>
            <h2>No Records Returned</h2>
        <?php endif; ?>
</div>

    <!-- /.container -->

<hr>
    
<?php include 'footer.php' ?>
</div>
<!-- /.container -->
