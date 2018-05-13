<?php ob_start(); ?>
<h1 class="heading">Hello World</h1>
<img src="img/Logo.png" />
<h1 class="heading">Bellevue Units</h1>
<div class="row">
	<div class="span12">
		<span class="section-padding"><b>Unit 1</b></span>
	</div>
	<div class="bgc">
		<div class="span4">
			<div class="section-padding">
				<a href="#"><img src="/img/bellevue.jpg" style="" /></a>
			</div>
		</div>
		<div class="span4">
			<div class="section-padding">
				<p>
					12345 SE 134th St, Bellevue WA 98053
					<br />
					This is a nice place to live.
				</p>
			</div>
		</div>
		<div class="span4">
			<div class="section-padding">
				Vacant
				<br/>
				2br 1 bath
				$940/month Rent
			</div>
		</div>
	</div>
</div>
<div style="clear:both;"></div>

<div class="row">
	<div class="span12">
		<span class="section-padding"><b>Unit 2</b></span>
	</div>
	<div class="span4">
		<div class="section-padding">
			<a href="#"><img src="/img/bellevue.jpg" style="" /></a>
		</div>
	</div>
	<div class="span4">
		<div class="section-padding">
			<p>
				12345 SE 134th St, Bellevue WA 98053
				<br />
				This is a nice place to live.
			</p>
		</div>
	</div>
	<div class="span4">
		<div class="section-padding">
			Vacant
			<br/>
			2br 1 bath
			$940/month Rent
		</div>
	</div>
</div>
<div style="clear:both;"></div>

<div class="row">
	<div class="span12">
		<span class="section-padding"><b>Unit 3</b></span>
	</div>
	<div class="span4">
		<div class="section-padding">
			<a href="#"><img src="/img/bellevue.jpg" style="" /></a>
		</div>
	</div>
	<div class="span4">
		<div class="section-padding">
			<p>
				12345 SE 134th St, Bellevue WA 98053
				<br />
				This is a nice place to live.
			</p>
		</div>
	</div>
	<div class="span4">
		<div class="section-padding">
			Vacant
			<br/>
			2br 1 bath
			$940/month Rent
		</div>
	</div>
</div>
<div style="clear:both;"></div>

<div class="row">
	<div class="span12">
		<span class="section-padding"><b>Unit 4</b></span>
	</div>
	<div class="span4">
		<div class="section-padding">
			<a href="#"><img src="/img/bellevue.jpg" style="" /></a>
		</div>
	</div>
	<div class="span4">
		<div class="section-padding">
			<p>
				12345 SE 134th St, Bellevue WA 98053
				<br />
				This is a nice place to live.
			</p>
		</div>
	</div>
	<div class="span4">
		<div class="section-padding">
			Vacant
			<br/>
			2br 1 bath
			$940/month Rent
		</div>
	</div>
</div>
<div style="clear:both;"></div>
<?php
//  Assign all Page Specific variables
$pagemaincontent = ob_get_contents();
ob_end_clean();
$pagetitle = "BroShea Properties - Property Management and Rentals";
include ("master.php");
?>
