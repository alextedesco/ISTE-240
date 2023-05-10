<!-- Alex Tedesco -->
<!-- ISTE-240 -->
<!-- Individual Project 2 -->

<?php
    $title = "Beyond The Lens";
    $cssPath = "../../assets/css/styles.css";
    $jsPath = "../../assets/js/script.js";
    $faviconPath = "../../assets/images/gatlinburg-logo.png";
    include ("../../assets/inc/header.php");
    include ("../../assets/inc/nav.php");
?>

        <span>
            <h1>Beyond The Lens</h1>
            <img src="../../assets/images/beyond_the_lens.jpg">

            <p>
                Beyond The Lens is the perfect spot for fun with the kids. Have the time of your life with 
                fun photo ops, virtual reality rides, hunt for Big Foot, mysteries of history, and interactive games, 
                including 2-minute escape rooms! It also feature a look through pop culture from the 1960's through today!
            </p>
        </span>

        <hr>

        <span>
            <h1>Hours</h1>
            <br>
            <img id="open-closed-image" src="">            
            <ul id="opening-hours">
                <li>Sunday: 10AM - 7PM</li>
                <li>Monday: 10AM - 7PM</li>
                <li>Tuesday: 10AM - 7PM</li>
                <li>Wednesday: 10AM - 7PM</li>
                <li>Thursday: 10AM - 7PM</li>
                <li>Friday: 10AM - 9PM</li>
                <li>Saturday: 10AM - 9PM</li>
            </ul>
        </span>

        <?php include ("../../assets/inc/openClosed.php");?>

        <hr>

        <span>
            <h1>Pricing)</h1>
            <ul>
                <li>Adult - $28.99</li>
                <li>Children - $16.99</li>
            </ul>
            <img src="../../assets/images/beyond_the_lens.2.jpg">
        </span>

<?php
include ("../../assets/inc/footer.php");
?>