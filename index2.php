<?php 
ob_start();
?>
<div class="row">
	<div class="span12">
		<h1>Upload File Form</h1>
		<form action="/uploads.php" method="post" enctype="multipart/form-data">
			<label for="file">Filename:</label>
			<input type="file" name="file" id="file" class="margin-bottom10px" /> 
			<br />
			<button type="submit" name="submit" value="Submit" class="btn"><i class="icon-file"></i> Submit</button>
		</form>
	</div>
</div>
<?php	
//  Assign all Page Specific variables
$pagemaincontent = ob_get_contents();
ob_end_clean();
$pagetitle = "Upload File Form";
include("master.php");
?>
