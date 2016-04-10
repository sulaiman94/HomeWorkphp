<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and MySql</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4"><h2>Uploading file</h2> <h4>sulaiman Aloraini</h4></div>
			<div class="col-md-4"></div>
		</div>
		
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="upload.php" method="post" enctype="multipart/form-data">
					<input type="file" name="file" /><br>
					<button type="submit" name="btn-upload" class="btn btn-primary">upload</button>
					<button type="submit" name="preview-upload" class="btn btn-primary" formaction="preview.php">preview</button>
				</form>
				<br /><br />
				<?php
				if(isset($_GET['success']))
				{
					?>
					<label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
					<label><a href="preview.php"><h3>click here to preview file.</h3></a></label>
					<?php
				}
				else if(isset($_GET['fail']))
				{
					?>
					<label>Problem While File Uploading !</label>
					<?php
				}
				else
				{
					?>
					<label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
					<?php
				}
				?>
			
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>

</body>
</html>