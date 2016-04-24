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

<!--
<div id="pics">

<?php if(count($existing_pics) > 0 )  { ?>
<?php foreach ($existing_pics as $row) : ?>
<h3> <?php echo $row->image_id; ?> </h3>
<h3> <?php echo $row->car_id; ?> </h3>
<img src="<?php echo $row->image_src; ?>" class="img-responsive">
<?php endforeach; ?>
<?php }else{ ?>
That's strange, no images were found.
<?php } ?>
-->

</div>

                                
<div id="upload">

<?php echo form_open_multipart('gallery/maintain_deets'); ?>
Photo Upload: <input type="file" name="photo" size="25" />
<input type="submit" name="submit" value="Submit" />


<?php if(!isset($deets['deet_rec'])) { ?>

	<?php foreach($deet_rec as $data) : ?>
	
		<input type = "hidden" name="id_p" id="id_p" value="<?php echo set_value('id_p', $data->car_id); ?>" />
		<input type = "hidden" name="make_p" id="make_p" value="<?php echo set_value('make_p', $data->car_make); ?>" />
		<input type = "hidden" name="model_p" id="model_p" value="<?php echo set_value('model_p', $data->car_model);?>"/>
		<input type = "hidden" name="year_p" id="year_p" value="<?php echo set_value('year_p', $data->car_year); ?>"/>
		
	<?php endforeach; ?>

<?php } else { ?>

	<?php foreach($deet_rec as $deets) : ?>
	
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