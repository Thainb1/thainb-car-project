<?php
ob_start();
include("admin_nav.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Account Database",$buffer);
echo $buffer;
?>

<!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1><i class="fa fa-users" style="padding-right:10px;"></i>Current Users Database</h1>
            <p>Below is a list of all the users currently registered. You are able to edit or delete entries</p>
        </header>

        <hr>

			<div>

			<table>
				<thead>
					<tr>
						<th>User ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
						<th>Password</th>
						<th>Email Address</th>
						<th>Privilage Status</th>
						<th>Activity</th>
					</tr>
				</thead>
			
<?php if(isset($records)): foreach($records as $row) : ?>


				<tbody>
					<tr>
						<td><?php echo $row->user_id; ?></td>
						<td><?php echo $row->user_forename; ?></td>
						<td><?php echo $row->user_surname; ?></td>
						<td><?php echo $row->user_username; ?></td>
						<td><?php echo $row->user_password; ?></td>
						<td><?php echo $row->user_email; ?></td>
						<td><?php echo $row->user_status; ?></td>
						<td class = "buttons"><a class="btn btn-success btn-lrg" href="<?php echo base_url("index.php/form/user_edit/$row->user_id"); ?>" style = "width:80px;  margin-right:10px;">UPDATE</a>

						<a class="btn btn-danger btn-lrg" href="<?php echo base_url("index.php/form/user_delete/$row->user_id"); ?>" style = "width:80px;  margin-right:10px;">DELETE</a></td>
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
<a class="btn btn-success btn-lrg" href="<?php echo site_url("form/users"); ?>">Add a User Account</a>
<hr>
<?php include 'footer.php' ?>
</div>