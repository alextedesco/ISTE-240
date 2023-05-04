<!-- Alex Tedesco -->
<!-- ISTE-240 -->
<!-- Individual Project 2 -->


<!-- Obtains the name of the file of the current loaded page -->
<?php
$current_url = basename($_SERVER['REQUEST_URI']);
?>
  
  <header>
  <!-- Navigation element for containing all subpages (list elements) -->
  <nav>
    <!-- Gatlinburg Logo -->
    <a href="http://solace.ist.rit.edu/~act2076/ISTE240/final/index.php"><img src="http://solace.ist.rit.edu/~act2076/ISTE240/final/assets/images/gatlinburg-logo.png" alt="Logo of Gatlinburg, Tennessee"></a>
    <img src="http://solace.ist.rit.edu/~act2076/ISTE240/final/assets/images/darkmode.png" onclick="lightMode()" id="lightbulb" class="lightmode">
    <ul>
      <!-- Each if else statement checks if the current_url matches the 
      page file of that page. If it does it will echo a placeholder #. Else it will
      echo the solace link to that page. This occurs for every page in the dropdown. -->
      <li><a <?php if ($current_url == "index.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/index.php"';
              }?>>Home</a>
              <ul>
                <li><a <?php if ($current_url == "comments.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/comments.php"';
              }?>>Leave a comment</a></li>
              </ul>
            </li>
      <!-- Seperator tag that adds a | equally in the nav -->
      <li class="seperator">|</li>
      <li>
        <a <?php if ($current_url == "sights.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/sights/sights.php"';
              }?>>Sights</a>
        <ul>
        <li>
            <a href="#">Fun</a>
            <ul>
              <li><a <?php if ($current_url == "beyond_the_lens.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/sights/fun/beyond_the_lens.php"';
              }?>>Beyond The Lens</a></li>
              <li><a <?php if ($current_url == "civil_war_theater.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/sights/fun/civil_war_theater.php"';
              }?>>Civil War Theater</a></li>
              <li><a <?php if ($current_url == "convention_center.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/sights/fun/convention_center.php"';
              }?>>Convention Center</a></li>
              <li><a <?php if ($current_url == "dollywood.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/sights/fun/dollywood.php"';
              }?>>Dollywood</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Museums</a>
            <ul>
              <li><a <?php if ($current_url == "car.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/sights/museum/car.php"';
              }?>>Hollywood Star Car Museum</a></li>
              <li><a <?php if ($current_url == "cooters.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/sights/museum/cooters.php"';
              }?>>Cooter's Place</a></li>
              <li><a <?php if ($current_url == "titanic.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/sights/museum/titanic.php"';
              }?>>Titanic Museum</a></li>
              <li><a <?php if ($current_url == "wax.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/sights/museum/wax.php"';
              }?>>Hollywood Wax Museum</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Scenery</a>
            <ul>
              <li><a <?php if ($current_url == "roaring_fork.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/sights/scenery/roaring_fork.php"';
              }?>>Roaring Fork</a></li>
              <li><a <?php if ($current_url == "skybridge.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/sights/scenery/skybridge.php"';
              }?>>Skybridge</a></li>
              <li><a <?php if ($current_url == "smokey_mountains_park.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/sights/scenery/smokey_mountains_park.php"';
              }?>>Great Smokey Mountains National Park</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="seperator">|</li>
      <li>
        <a <?php if ($current_url == "restaurants.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/restaurants/restaurants.php"';
              }?>href="#">Restaurants</a>
        <ul>
          <li>
            <a href="#">BBQ</a>
            <ul>
              <li><a <?php if ($current_url == "bennetts.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/restaurants/bbq/bennetts.php"';
              }?>>Bennett's Pit Bar-B-Que</a></li>
              <li><a <?php if ($current_url == "calhouns.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/restaurants/bbq/calhouns.php"';
              }?>>Calhoun's BBQ</a></li>
              <li><a <?php if ($current_url == "hungrybearbbq.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/restaurants/bbq/hungrybearbbq.php"';
              }?>>Hungry Bear BBQ</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Breakfast</a>
            <ul>
              <li><a <?php if ($current_url == "blackrifle.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/restaurants/breakfast/blackrifle.php"';
              }?>>Black Rifle Coffee Company</a></li>
              <li><a <?php if ($current_url == "crockets.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/restaurants/breakfast/crockets.php"';
              }?>>Crockett's Breakfast Camps</a></li>
              <li><a <?php if ($current_url == "logcabin.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/restaurants/breakfast/logcabin.php"';
              }?>>Log Cabin Pancake House</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Seafood</a>
            <ul>
              <li><a <?php if ($current_url == "bubbagump.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/restaurants/seafood/bubbagump.php"';
              }?>>Bubba Gump Shrimp Company</a></li>
              <li><a <?php if ($current_url == "trouthouse.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/restaurants/seafood/trouthouse.php"';
              }?>>Smokey Mountain Trout House</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="seperator">|</li>
      <li>
        <a <?php if ($current_url == "history.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/history/history.php"';
              }?>>History</a>
        <ul>
          <li>
            <a href="#">Fires</a>
              <ul>
                <li><a <?php if ($current_url == "fires_1992.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/history/fires/fires_1992.php"';
              }?>>Fires of 1992</a></li>
                <li><a <?php if ($current_url == "fires_2016.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/history/fires/fires_2016.php"';
              }?>>Fires of 2016</a></li>
              </ul>
          </li>
          <li><a <?php if ($current_url == "civilwar.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/history/civilwar/civilwar.php"';
              }?>>Civil War</a></li>
          <li><a <?php if ($current_url == "nativeamerican.php") {
                echo 'href="#"'; 
              } else {
                echo 'href="http://solace.ist.rit.edu/~act2076/ISTE240/final/history/nativeamerican/nativeamerican.php"';
              }?>>Native Americans</a></li>
        </ul>
      </li>
    </ul>
  </nav>
</header>