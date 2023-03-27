<?php
/*  
if($name == "homepage"){
        echo "you are on homepage";
        echo 'class="active"';
    }

    if($name == "otherpage"){
       echo "you are on otherpage"; 
    }
*/
?>

              <nav class="subnav">
					<ol class="nav nav-list container-fluid nav-collapse collapse in">
						<li <?php if($name == "homepage"){ echo 'class="active"'; }  ?>   ><a href="index.php">Home</a></li>
						<li <?php if($name == "otherpage"){ echo 'class="active"';  }  ?> ><a href="otherpage.php">Other Page!</a></li>
					</ol>
				</nav><!-- end subnav -->