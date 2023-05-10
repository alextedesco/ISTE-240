<!-- Alex Tedesco -->
<!-- ISTE-240 -->
<!-- Individual Project 2 -->

<?php
    $title = "Sights";
    $cssPath = "../assets/css/styles.css";
    $jsPath = "../assets/js/script.js";
    $faviconPath = "../assets/images/gatlinburg-logo.png";
    include ("../assets/inc/header.php");
    include ("../assets/inc/nav.php");
?>

        <span>
            <h1>Museums</h1>
            <img src="../assets/images/museum.jpg">

            <p>
                Gatlinburg is home to many acclaimed museum that are a must see on any vacation. These museums include 
                the <a href="museum/titanic.php">Titanic Museum</a>, the <a href="museum/wax.php">Hollywood Wax Museum</a>, 
                the <a href="museum/car.php">Hollywood Star Car Museum</a>, and <a href="museum/cooters.php">Cooter's Place</a>
            </p>
        </span>

        <hr>

        <span>
            <h1>Scenery</h1>
            <img src="../assets/images/scenery.jpg">
            <p>
               Gatlinburg is one of the most beautiful places in the United States with <a href="scenery/smokey_mountains_park.php">Great Smokey Mountains National Park</a>, 
               the <a href="scenery/skybridge.php">Gatlinburg Skybridge</a>, and the <a href="scenery/roaring_fork.php">Roaring Fork</a>
            </p>
        </span>

        <hr>

        <span>
            <h1>Fun</h1>
            <img src="../assets/images/fun.webp">
            <p>Gatlinburg is a key spot for any family vacation and of course that means fun the entire family. Some of the favorites for 
                in Gatlinburg include <a href="fun/dollywood.php">Dollywood</a>, the <a href="fun/convention_center.php">Gatlinburg Convention Center</a>, 
            <a href="fun/beyond_the_lens.php">Beyond The Lens</a>, and <a href="fun/civil_war_theater.php">Buttonwillow Civil War Theater</a>
            </p>
        </span>

<?php
include ("../assets/inc/footer.php");
?>