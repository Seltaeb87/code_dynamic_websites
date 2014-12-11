<ul>
	<?php

		//loop through array navItems and get the array items and titles from array.php
		foreach ($navItems as $item){
			echo "<li><a href=\"$item[slug]\">$item[title]</a></li>";
		}
	?>
</ul>