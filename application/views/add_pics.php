<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Adding Pictures",$buffer);
echo $buffer;
?>

<div>


<h3>Adding Pictures for</h3>




                                
<div id="upload">

<?php echo form_open_multipart('gallery/maintain_deets'); ?>
Photo Upload: <input type="file" name="photo" size="25" />
<input type="submit" name="submit" value="Submit" />


<?php if(!isset($deets['records'])) { ?>

	<?php foreach($records as $data) : ?>
	
		<input type = "hidden" name="id_p" id="id_p" value="<?php echo set_value('id_p', $data->car_id); ?>" />
		<input type = "hidden" name="make_p" id="make_p" value="<?php echo set_value('make_p', $data->car_make); ?>" />
		<input type = "hidden" name="model_p" id="model_p" value="<?php echo set_value('model_p', $data->car_model);?>"/>
		<input type = "hidden" name="year_p" id="year_p" value="<?php echo set_value('year_p', $data->car_year); ?>"/>
		
	<?php endforeach; ?>

<?php } else { ?>

	<?php foreach($records as $deets) : ?>
	
		<input type = "hidden" name="id_p" id="id_p" value="<?php echo set_value('id_p', $deets->car_id); ?>" />
		<input type = "hidden" name="make_p" id="make_p" value="<?php echo set_value('make_p', $deets->car_make); ?>" />
		<input type = "hidden" name="model_p" id="model_p" value="<?php echo set_value('model_p', $deets->car_model);?>"/>
		<input type = "hidden" name="year_p" id="year_p" value="<?php echo set_value('year_p', $deets->car_year); ?>"/>
		
	<?php endforeach; ?>

<?php } ?>
<?php echo form_close(); ?>

</div>
<?php include 'footer.php' ?>
</div>