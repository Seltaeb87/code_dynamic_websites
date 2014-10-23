<?php
	
	// Constants
	define('TITLE', 'Get your hands dirty if, else, else-if');
	
	// Custom Variables
	$name = 'Bastiaan Bitter';
	$date = date('Y');

	$species = 'Black Rhino';
	$nativeLanguage = 'French';
	$age = 27;

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
			
			<h1>Get Your Hands Dirty: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">

				<?php

					if($species == 'Black Rhino'){

						echo '<p>Welcome, black rhino!</p>';

					}elseif ($species == 'Human') {

						echo '<p>Welcome Human! Please leave the black rhino alone.</p>';
						

					}else{
						echo '<p>Welcome to earth, you species is not familiar with us.</p>';

					};


				?>

				<h5>Another example:</h5>

					<?php
						if ($age == 20) {

							echo '<p>Yaay, on earth for 27 years!</p>';
							
						}elseif ($age < 20) {

							echo '<p>Not quite 20 yet, boy!</p>';
							
						}else{
							echo '<p>You must be more than 20 years old</p>';

						};

					?>


					<h5>A combination:</h5>

					<?php  

						if ($nativeLanguage == 'German') {
							echo '<p>Wilkommen!</p>';
						}elseif ($species == 'Black Rhino') {
							echo '<p>Oh, you must be a Rhino..</p>';
						}else{
							echo '<p>Your not a rhino, nor german!</p>';
						};

					?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo $date; ?> - <?php echo $name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
