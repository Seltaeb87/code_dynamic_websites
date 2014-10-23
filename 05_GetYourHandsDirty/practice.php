<?php
	
	// Define a Constant
	define("TITLE", "Variables and constants");
	
	// Your Variables
	$name = "Bastiaan";
	$colour = "Black";
	$birth_year = 1987;

	date_default_timezone_set('Europe/Amsterdam');

	$today = date('F j, Y');
	$year = date('Y');

	/*
	Use PHP to calculate the difference
	between your birth year and this year
	to show your age dynamically
	*/

	$my_age = ($year - $birth_year);

	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Get Your Hands Dirty: <?php echo TITLE;  ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><!-- PAGE TITLE --></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<h3>Today's Date:</h3>
				<p><?php echo $today; ?></p>
				
				<h3>My Name:</h3>
				<p><?php echo $name; ?></p>
				
				<h3>My Favourite Colour:</h3>
				<p><?php echo $colour; ?></p>
				
				<h3>My Age:</h3>
				<p><?php echo $my_age; ?></p>
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the final example</a>
			
			<hr>
			
			<small>&copy;<?php echo $year; ?> - <?php echo $name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
