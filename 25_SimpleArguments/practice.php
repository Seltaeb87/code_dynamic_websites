<?php
	
	// Constants
	define("TITLE", "Simple Arguments");
	
	// Custom Variables
	$myName	= "Bastiaan";
	$lessonNum	= 25;

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lessonNum; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>One Argument</h3>
				<?php
					
					function name($lastname){
							echo 'Hi, my name is Bastiaan ' . $lastname . '<br />';
					}
					
					name('Bitter');
					name('Hilversum');
					name('Boot');
				?>
				
				<h3>Two Arguments</h3>
				<?php
				
					function moreArguments($firstName, $lastName){
						echo 'This is my first name: ' . $firstName . '<br />';
						echo 'And this is my lastname: ' . $lastName;
						
					}

					//instead of typing my name, I grapped the variable $myName at the top. And it works!
					moreArguments($myName,  'Bitter');
				
				?>

				<h3>Three arguments</h3>
				<?php

					// This is an extra function I came up with, just for practicing
					function mathTimesThree($val1, $val2, $val3){

						echo $val1 * $val2 - $val3;
					}
						// result is 15
						mathTimesThree(10, 2, 5);
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $myName; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
