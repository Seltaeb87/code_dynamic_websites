<?php
	
	// Constants
	define('TITLE', 'Assignment Operator');
	
	// Custom Variables
	$lesson_num = 18;
	$name = 'Bastiaan';

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
			
			<h1>Tutorial <?php echo $lesson_num; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>Addition Assignment Operator <code>+=</code></h3>
				<?php
					$a = 30;
					$b = 50;
					$a += $b; //Adds $a and $b together

					echo $a;
				?>
				
				<h3>Subtraction Assignment Operator <code>-=</code></h3>
				<?php
					$a = 30;
					$b = 50;
					$a -= $b; //Subtract $b(50) from $a(30)

					echo $a;
				?>
				
				<h3>Multiplication Assignment Operator <code>*=</code></h3>
				<?php
					$a = 30;
					$b = 50;
					$a *= $b;

					echo $a;
				?>
				
				<h3>Division Assignment Operator <code>/=</code></h3>
				<?php
					$a = 30;
					$b = 50;
					$a /= $b;

					echo $a;
				?>
				
				<h3>Modulus Assignment Operator <code>%=</code></h3>
				<?php
					$a = 30;
					$b = 50;
					$a %= $b;

					echo $a;
				?>
				
				<h3>Concatenation Assignment Operator <code>.=</code></h3>
				<?php
					$a = 30;
					$b = 50;
					$a .= $b; //will output 3050

					echo $a;
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?>- <?php echo $name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
