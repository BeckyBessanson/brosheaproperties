<?php ob_start(); ?>
<div class="section-padding">
	<h1 class="heading">BroShea Properties</h1>
	<p>Content will go here. Hooray! This is pretty cool!</p>
	<p>More content here.</p>
	<p>I am testing sftp drive.</p>
</div>
<?php
//  Assign all Page Specific variables
$pagemaincontent = ob_get_contents();
ob_end_clean();
$pagetitle = "BroShea Properties - Property Management and Rentals";
include("master.php");
?>
