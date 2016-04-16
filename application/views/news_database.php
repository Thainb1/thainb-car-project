<?php
ob_start();
include("staff_nav.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Complete News bank",$buffer);
echo $buffer;
?>

<!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1><i class="fa fa-newspaper-o" style="padding-right:10px;"></i>Current News Story bank</h1>
            <p>Below is a list of all the news stories currently on file. You are able to edit or delete entries</p>
        </header>

        <hr>

		
			
			<div>

			<table>
				<thead>
					<tr>
						<th>News Story ID:</th>
						<th>Article Title:</th>
						<th>Time and Date:</th>
						<th>Article Content:</th>
						<th>Author ID:</th>
						<th>Activity</th>
					</tr>
				</thead>
			
<?php if(isset($records)): foreach($records as $row) : ?>


				<tbody>
					<tr>
						<td><?php echo $row->news_id; ?></td>
						<td><?php echo $row->article_title; ?></td>
						<td><?php echo $row->post_time; ?></td>
						<td><?php echo $row->article_body; ?></td>
						<td><?php echo $row->user_id; ?></td>
						<td class = "buttons"><a class="btn btn-success btn-lrg" href="<?php echo base_url("index.php/site/news_edit/$row->news_id"); ?>" style = "width:80px;  margin-right:10px;">UPDATE</a>

						<a class="btn btn-danger btn-lrg" href="<?php echo base_url("index.php/site/news_delete/$row->news_id"); ?>" style = "width:80px;  margin-right:10px;">DELETE</a></td>
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
<a class="btn btn-success btn-lrg" href="<?php echo site_url("site/news_page"); ?>">Add a News Story</a>
<hr>
<?php include 'footer.php' ?>
</div>