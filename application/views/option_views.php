<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Main Options",$buffer);
echo $buffer;
?>

	<h2>Create</h2>
		<?php echo form_open('site/create');?>
	
		<p>
			<label class = "test"  for = "make">Car Make:</label>
			<input type = "text" name="make" id="make"/>
		</p>
		
		<p>
			<label class = "test"  for = "model">Car Model:</label>
			<input type = "text" name="model" id="model"/>
		</p>

		<p>
			<label class = "test"  for = "miles">Car miles:</label>
			<input type = "number" name="miles" id="miles"/>
		</p>

		<p>
			<label class = "test"  for = "year">Car year:</label>
			<input type = "number" name="year" id="year"/>
		</p>

		<p>
			<label class = "test"  for = "price">Car price:</label>
			<input type = "number" name="price" id="price"/>
		</p>

			<p>
			<label class = "test"  for = "trans">Car Transmisson:</label>
			<input type = "text" name="trans" id="trans"/>
		</p>

			<p>
			<label class = "test"  for = "special">Special ID:</label>
			<input type = "text" name="special" id="special"/>
		</p>

		<p>
			<input type = "submit" value="Create New Record"/>
		</p>

		<?php echo form_close();?>

		<h2>Read</h2>
		<?php if(isset($records)): foreach($records as $row) : ?>
			
			<div>

			<table>
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
			
			<tr>
			<td><?php echo $row->car_id; ?></td>
			<td><?php echo $row->car_make; ?></td>
			<td><?php echo $row->car_model; ?></td>
			<td><?php echo $row->car_miles; ?></td>
			<td><?php echo $row->car_year; ?></td>
			<td><?php echo $row->car_price; ?></td>
			<td><?php echo $row->car_transmission; ?></td>
			<td><?php echo $row->special_id; ?></td>
			<td class = "buttons"><a class="btn btn-info btn-lrg" href="<?php echo base_url("index.php/site/edit/$row->car_id"); ?>" style = "width:80px; height:35px; margin-right:10px;">UPDATE</a>

			<a class="btn btn-danger btn-lrg" href="<?php echo base_url("index.php/site/delete/$row->car_id"); ?>" style = "width:80px; height:35px; margin-right:10px;">DELETE</a></td>
			</tr>
			</table>
			</div>

			<?php endforeach; ?>
		<?php else : ?>
			<h2>No Records Returned</h2>
		<?php endif; ?>
		
		<p></p>

<?php include 'footer.php'; ?>