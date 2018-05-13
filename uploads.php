<?php 
ob_start();
?>
<div class="row">
	<div class="span12">
		<?php include $_SERVER[DOCUMENT_ROOT]."/php/upload_file.php"; ?>
		<br />
		<a href="/brosheaproperties/">Home</a>
		<img src="/img/bellevue.jpg" style="" /><span style="margin-left:20px; font-weight:bold;font-size:14px;">Bellevue</span>
	</div>
</div>
<?php	
//  Assign all Page Specific variables
$pagemaincontent = ob_get_contents();
ob_end_clean();
$pagetitle = "Uploaded File";
include("master.php");
?>
