<?php
	define('TITLE', 'Team | Franklins Fine Dining');
	include('includes/header.php');
?>

	<div id='team-members' class='cf'>
		<h1>Team at Franlin's</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				Pellentesque vitae purus vel diam scelerisque bibendum 
				vel quis arcu. Quisque maximus felis dui, nec imperdiet 
				magna rutrum nec. Phasellus elementum magna tellus, 
				in consectetur quam congue in. Proin iaculis tincidunt 
				sapien. Lorem ipsum dolor sit amet, consectetur adipiscing 
				elit. Pellentesque libero lorem, pretium ut fringilla quis,
				 pulvinar in mi. Quisque varius nisi ac maximus faucibus. 
				 Morbi suscipit magna justo, ac posuere justo dictum 
				 volutpat. Nulla imperdiet enim est, sed dapibus est 
				 efficitur et. Aliquam erat volutpat.
			</p>

			<hr>

			<?php

				foreach ($teamMembers as $member) {

			?>

				<div class='member'>
					<img src="img/<?php echo $member[img]; ?> alt="<?php echo $member[name]; ?>">
					<h2><?php echo $member[name]; ?></h2>
					<p><?php echo $member[bio]; ?></p>
				</div><!-- member -->


			<?php
				}
			?>
	</div>

<?php

	include('includes/footer.php');

?>