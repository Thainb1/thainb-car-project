<?php
ob_start();
include("staff_nav.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Complete Car Stock",$buffer);
echo $buffer;
?>

<!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1><i class="fa fa-car" style="padding-right:10px;"></i>Current Car Stock</h1>
            <p>Below is a lost of all the cars currently registered in stock. You are able to edit or delete entries</p>
        </header>

        <hr>

		
			
			<div>

			<table>
				<thead>
					<tr>
						<th>Car ID</th>
						<th>Car Make</th>
						<th>Car Model</th>
						<th>Car Miles</th>
						<th>Car Year</th>
						<th>Car Price</th>
						<th>Car Transmission</th>
						<th>Special ID</th>
						<th>Activity</th>
					</tr>
				</thead>
			
<?php if(isset($records)): foreach($records as $row) : ?>


				<tbody>
					<tr>
						<td><?php echo $row->car_id; ?></td>
						<td><?php echo $row->car_make; ?></td>
						<td><?php echo $row->car_model; ?></td>
						<td><?php echo $row->car_miles; ?></td>
						<td><?php echo $row->car_year; ?></td>
						<td><?php echo $row->car_price; ?></td>
						<td><?php echo $row->car_transmission; ?></td>
						<td><?php echo $row->special_id; ?></td>
						
						<td class = "buttons"><a class="btn btn-success btn-lrg" href="<?php echo base_url("index.php/site/edit/$row->car_id"); ?>" style = "width:80px;  margin-right:10px; ">UPDATE</a>

						<a class="btn btn-danger btn-lrg" href="<?php echo base_url("index.php/site/delete/$row->car_id"); ?>" style = "width:80px;  margin-right:10px; ">DELETE</a>
						
						<a class="btn btn-primary btn-lrg" href="<?php echo base_url("gallery/add_car_pics/$row->car_id"); ?>" style = "width:130px;  margin-right:10px; ">ADD PICTURES</a>
						
						</td>
					</tr>
				</tbody>
			

			<?php endforeach; ?>
		<?php else : ?>
			<h2>No Records Returned</h2>
		<?php endif; ?>
		</table>
			</div>
		<p></p>




<hr>
<a class="btn btn-success btn-lrg" href="<?php echo site_url("site/add_car"); ?>">Add a Car</a>
<hr>
<?php include 'footer.php' ?>
</div>