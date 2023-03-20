<nav class="subnav">

					<?php
						if ($title == "Test")(echo "ON TEST";)
						
					?>
					<ol class="nav nav-list container-fluid nav-collapse collapse in">
						<li <?php if ($title == "Home")(echo 'class="active"';) ?>><a href="index.php">Home</a></li>
						<li><?php if ($title == "People")(echo 'class="active"';) ?>><a href="people/index.php">Our People</a></li>
						<li><?php if ($title == "Tour")(echo 'class="active"';) ?>><a href="tour/index.php">Tour</a></li>
						<li><?php if ($title == "TEST")(echo 'class="active"';) ?>><a href="tour/index.php">Test</a></li>
					</ol>
				</nav>