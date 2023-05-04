<!-- Alex Tedesco -->
<!-- ISTE-240 -->
<!-- Individual Project 2 -->

<?php
    $title = "Restaurants";
    $cssPath = "../assets/css/styles.css";
    $jsPath = "../assets/js/script.js";
    $faviconPath = "../assets/images/gatlinburg-logo.png";
    include ("../assets/inc/header.php");
    include ("../assets/inc/nav.php");
?>

        <span>
            <h1>Breakfast/Coffee</h1>
            <img src="../assets/images/breakfast.jpg">

            <p>
                During your visit in Gatlinburg you can't skip out on breakfast! Gatlinburg has the some of the best breakfast restaurants in the country. For your coffee
                needs visit the famous <a href="breakfast/blackrifle.php">Black Rifle Coffee Company</a>, and for a delicious family breakfast consider <a href="breakfast/crockets.php">Crockett's Breakfast Camp</a> 
                or the <a href="breakfast/logcabin.php">Log Cabin Pancake House</a>.
            </p>
        </span>

        <hr>

        <span>
            <h1>BBQ</h1>
            <img src="../assets/images/bbq.webp">
            <p>
               You can't visit the Gatlinburg, let alone the Southern United States, without trying some of famous barbecue. Gatlinburg has a large variety of 
               great barbecue restaurants to visit including the <a href="bbq/calhouns.php">Calhoun's</a>, the <a href="bbq/hungrybearbbq.php">Hungry Bear BBQ</a>, and <a href="bbq/bennetts.php">Bennett's Pit Bar-B-Que</a>
            </p>
        </span>

        <hr>

        <span>
            <h1>Seafood</h1>
            <img src="../assets/images/seafood.jpg">
            <p>Gatlinburg is the home to many amazing seafood restauants including the Forest Gump inspired <a href="seafood/bubbagum.php">Bubba Gump Shrimp Company</a> and
                a local favorite the <a href="seafood/trouthouse.php">Smokey Mountain Trout House</a>
            </p>
        </span>

<?php
include ("../assets/inc/footer.php");
?>