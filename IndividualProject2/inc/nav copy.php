<?php
$current_url = basename($_SERVER['REQUEST_URI']);
?>
  
  <!-- Navigation element for containing all subpages (list elements) -->
  <header>
  <!-- Navigation element for containing all subpages (list elements) -->
  <nav>
    <!-- Gatlinburg Logo -->
    <img src="http://solace.ist.rit.edu/~act2076/ISTE240/IndividualProjects/Project2/assets/gatlinburg-logo.png" alt="Logo of Gatlinburg, Tennessee">
    <ul>
      <li><a href="#">Home</a></li>
      <li class="seperator">|</li>
      <li>
        <a href="#">Sights</a>
        <ul>
          <li><a href="#">Fun</a></li>
          <li><a href="#">Museums</a></li>
          <li><a href="#">Scenery</a></li>
        </ul>
      </li>
      <li class="seperator">|</li>
      <li>
        <a href="#">Restaurants</a>
        <ul>
          <li>
            <a href="#">BBQ</a>
            <ul>
              <li><a href="#">Bennett's Pit Bar-B-Que</a></li>
              <li><a href="#">Calhoun's BBQ</a></li>
              <li><a href="#">Hungry Bear BBQ</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Breakfast</a>
            <ul>
              <li><a <?php if ($current_url == "blackrifle.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/IndividualProjects/Project2/restaurants/breakfast/blackrifle.php"';
              }?>>Black Rifle Coffee Company</a></li>
              <li><a <?php if ($current_url == "crockets.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/IndividualProjects/Project2/restaurants/breakfast/crockets.php"';
              }?>>Crockett's Breakfast Camps</a></li>
              <li><a <?php if ($current_url == "logcabin.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/IndividualProjects/Project2/restaurants/breakfast/logcabin.php"';
              }?>>Log Cabin Pancake House</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Seafood</a>
            <ul>
              <li><a <?php if ($current_url == "bubbagump.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/IndividualProjects/Project2/restaurants/seafood/bubbagump.php"';
              }?>>Bubba Gump Shrimp Company</a></li>
              <li><a <?php if ($current_url == "trouthouse.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/IndividualProjects/Project2/restaurants/seafood/trouthouse.php"';
              }?>>Smokey Mountain Trout House</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="seperator">|</li>
      <li>
        <a href="#">History</a>
        <ul>
          <li><a href="#">Historical Sites</a></li>
          <li><a href="#">Museums</a></li>
          <li><a href="#">Heritage Tours</a></li>
        </ul>
      </li>
    </ul>
  </nav>
</header>