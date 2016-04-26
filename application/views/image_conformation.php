<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Conformation Image Upload",$buffer);
echo $buffer;
?>

<div>

<h3>Confirm Image Upload</h3>



<a class="btn btn-success btn-lrg" href="<?php echo base_url("gallery/image_redirect"); ?>" style = "width:80px;  margin-right:10px; ">Upload another picture</a>
						
<a class="btn btn-danger btn-lrg" href="<?php echo base_url("site/car_db"); ?>" style = "width:130px;  margin-right:10px; ">No more pictures to upload</a>


</div>
<?php include 'footer.php' ?>
</div>