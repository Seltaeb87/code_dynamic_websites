<?php
	
	// Constants
	define('TITLE', 'Logical operaters');
	
	// Custom Variables
	$name = 'Bastiaan Bitter';
	$lesson_num = 15;

	$username = 'Bastiaan';
	$password = 'Bitte';

	$cartTotal = 19.99;
	$couponCode = 'DiscountPlease';

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP  <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_num; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>And <code>and</code></h3>
				<?php
					
					if ($username == 'Bastiaan' && $password == 'Bitter') {
						echo '<p>Login info is correct!</p>';
					}else{
						echo '<p>Login is NOT correct..</p>';
					}

				?>
				
				<h3>Or <code>or</code></h3>
				<?php
					
					if ($cartTotal > 20 || $couponCode == 'DiscountNow') {
						echo '<p>You get a discount.</p>';
					}else{
						echo '<p>You don\'t get a discount</p>';
					}
				?>
				
				<h3>Not <code>!</code></h3>
				<?php
					$ownDog = true;

						if (!$ownDog) {
							echo 'You do not own a dog';
						}else{
							echo 'You own a dog!';
						}
				?>
				
				<h3>And <code>&amp;&amp;</code></h3>
				<?php
					if ($username == 'Bastiaan' && $password = 'Bitter') {
						echo 'Login is correct.';
					}else{
						echo 'Wrong info!';
					}
				?>
				
				<h3>Or <code>||</code></h3>
				<?php
					if ($cartTotal > 15 || $couponCode == 'DiscountPlease') {
						echo 'You get a discount!';
					}else{
						echo 'You don\'t get a discount.';
					}
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
