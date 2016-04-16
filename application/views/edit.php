<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
	<link rel="stylesheet" href="<?php echo base_url("extras/css/bootstrap.min.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("extras/css/general.css"); ?>" />
</head>
<body>


<h2>Edit</h2>
		<?php echo form_open('site/update'); foreach ($record as $data) {  ?>
		<input type="hidden" name="id" title="id" value="<?php echo $data->car_id; ?>"></input>
	
		<p>
			<label class = "test"  for = "make">Car Make:</label>
			<input type = "text" name="make" id="make" value="<?php echo $data->car_make; ?>" />
		</p>
		
		<p>
			<label class = "test"  for = "model">Car Model:</label>
			<input type = "text" name="model" id="model" value="<?php echo $data->car_model;?>"/>
		</p>

		<p>
			<label class = "test"  for = "miles">Car miles:</label>
			<input type = "number" name="miles" id="miles" value="<?php echo $data->car_miles; ?>"/>
		</p>

		<p>
			<label class = "test"  for = "year">Car year:</label>
			<input type = "number" name="year" id="year" value="<?php echo $data->car_year; ?>"/>
		</p>

		<p>
			<label class = "test"  for = "price">Car price:</label>
			<input type = "number" name="price" id="price" value="<?php echo $data->car_price; ?>"/>
		</p>

			<p>
			<label class = "test"  for = "trans">Car Transmisson:</label>
			<input type = "text" name="trans" id="trans" value="<?php echo $data->car_transmission; ?>"/>
		</p>

			<p>
			<label class = "test"  for = "special">Special ID:</label>
			<input type = "text" name="special" id="special" value="<?php echo $data->special_id; ?>"/>
		</p>

		<p>
			<input type = "submit" value="Update Record"/>
		</p>

		<?php } echo form_close();?>

		<?php echo $data->car_id; ?>

<script type="text/javascript" src="<?php echo base_url("extras/js/jQuery.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("extras/js/bootstrap.min.js"); ?>"></script>
</body>
</html>