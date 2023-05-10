<!-- Alex Tedesco -->
<!-- ISTE-240 -->
<!-- Individual Project 2 -->

<?php
    $title = "Dollywood";
    $cssPath = "../../assets/css/styles.css";
    $jsPath = "../../assets/js/script.js";
    $faviconPath = "../../assets/images/gatlinburg-logo.png";
    include ("../../assets/inc/header.php");
    include ("../../assets/inc/nav.php");
?>

        <span>
            <h1>Dollywood</h1>
            <img src="../../assets/images/dollywood.jpg">

            <p>
                Dollywood is a theme park jointly owned by entertainer Dolly Parton and Herschend Family Entertainment. 
                It is located in the Knoxville metropolitan area in Pigeon Forge, Tennessee, 
                near the gateway to The Great Smoky Mountains. The park hosts 3 million visitors a year.
            </p>
        </span>

        <hr>

        <span>
            <h1>Hours</h1>
            <br>
            <img id="open-closed-image" src="">            
            <h2>Theme Park:</h2>
            <ul id="opening-hours">
                <li>Sunday: 10AM - 9PM</li>
                <li>Monday: 10AM - 9PM</li>
                <li>Tuesday: 10AM - 9PM</li>
                <li>Wednesday: 10AM - 9PM</li>
                <li>Thursday: 10AM - 9PM</li>
                <li>Friday: 10AM - 9PM</li>
                <li>Saturday: 10AM - 9PM</li>
            </ul>

            <?php include ("../../assets/inc/openClosed.php");?>

            <h2>Water Park:</h2>
            <ul>
                <li>Sunday: 10AM - 7PM</li>
                <li>Monday: 10AM - 7PM</li>
                <li>Tuesday: 10AM - 7PM</li>
                <li>Wednesday: 10AM - 7PM</li>
                <li>Thursday: 10AM - 7PM</li>
                <li>Friday: 10AM - 7PM</li>
                <li>Saturday: 10AM - 7PM</li>
            </ul>
        </span>

        <hr>

        <span>
            <h1>Pricing (for ages 10 and up)</h1>
            <ul>
                <li>1-Day Adult: $89</li>
                <li>2-Day Adult: $109</li>
                <li>3-Day Adult: $119</li>
            </ul>
        </span>

<?php
include ("../../assets/inc/footer.php");
?>