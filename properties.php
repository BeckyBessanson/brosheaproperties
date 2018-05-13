<?php ob_start(); ?>
	<h1 class="heading">Properties</h1>
	<p>Content will go here</p>
	<p>More content here.</p>
<?php	
//  Assign all Page Specific variables
$pagemaincontent = ob_get_contents(); 
ob_end_clean();
$pagetitle = "BroShea Properties - Property Management and Rentals";
include("master.php");
?>
