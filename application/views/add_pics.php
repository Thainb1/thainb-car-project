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
	<table>
		<tr>
		
		<?php echo form_open_multipart('gallery'); ?>
		<td class="upload"><?php echo form_upload('userfile'); ?></td>
		<td><?php echo form_submit('upload', 'Upload'); ?></td>
		
		<?php echo form_close(); ?>
		</tr>
	</table>
	
	
	
</div>

<?php include 'footer.php' ?>
</div>