<!DOCTYPE html>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>CAR DATABASE</title>
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
<script type="text/javascript">

function show_confirm(act,gotoid)
{
	if(act=="edit")
	var r=confirm("Do you really want to edit?");
	else
	var r=confirm("Do you really want to delete?");
	if (r==true)
	{
		
	}
}
</script>



</head>

<body>

<h2> Car Show Room </h2>

<tbody>
<table border="1">
<tr>
	<th>Car ID</th>
	<th>Car Make</th>
	<th>Car Model</th>
	<th>Car Miles</th>
	<th>Car Year</th>
	<th>Car Price</th>
	<th>Car Transmisison</th>
	<th>Special ID</th>
	<th scope="col" colspan="2">Action</th>
</tr>

<?php foreach ($car_list as $u_key){ ?>

<tr>
	<td><?php echo $u_key->car_id; ?></td>
	<td><?php echo $u_key->car_make; ?></td>
	<td><?php echo $u_key->car_model; ?></td>
	<td><?php echo $u_key->car_miles; ?></td>
	<td><?php echo $u_key->car_year; ?></td>
	<td><?php echo $u_key->car_price; ?></td>
	<td><?php echo $u_key->car_transmission; ?></td>
	<td><?php echo $u_key->special_id; ?></td>
	<td width="40" align="left" ><a href="#" onClick="show_confirm('edit',<?php echo $u_key->car_id;?>)">Edit</a></td>
	<td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $u_key->car_id;?>)">Delete </a></td>
</tr>

<?php }?>
</table>
</tbody>


<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>

</body>

</html>
