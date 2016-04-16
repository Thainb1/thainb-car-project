<!DOCTYPE html>
<html>
<head>
	<title>CI Gallery</title>
</head>
<body>

<div id="gallery">

</div>

<div id="upload">
	<?php 
		echo form_open_multipart('gallery');
		echo form_upload('userfile');
		echo form_submit('upload', 'Upload');
		echo form_close();
	?>
</div>

</body>
</html>