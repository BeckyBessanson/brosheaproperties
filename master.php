<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $pagetitle ?></title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/styles.css">
	</head>
	<body>
		<div class="container">
			<div class="master-container">
			<?php include "header.php"; ?>
				<div class="row">
					<!--<div class="span3">
						<?php include "leftmenu.php" ?>
					</div> -->
					<div class="col-md-12">
						<div class="main-content">
							<?php echo $pagemaincontent; ?>
						</div>
					</div>
				</div>
				<?php include ("footer.php");?>
			</div>
		</div>
	</body>
</html>
