<!-- Alex Tedesco -->
<!-- ISTE-240 -->
<!-- Individual Project 2 -->

<?php
    $title = "Great Smokey Mountains National Park";
    $cssPath = "../../assets/css/styles.css";
    $jsPath = "../../assets/js/script.js";
    $faviconPath = "../../assets/images/gatlinburg-logo.png";
    include ("../../assets/inc/header.php");
    include ("../../assets/inc/nav.php");
?>
        <span>
            <h1>Great Smokey Mountains National Park</h1>
            <img src="../../assets/images/smokey_mountains.jpg">

            <p>
                Great Smoky Mountains National Park is an American national park in the southeastern United States, 
                with parts in North Carolina and Tennessee. The park straddles the ridgeline of the Great Smoky Mountains, 
                part of the Blue Ridge Mountains, which are a division of the larger Appalachian Mountain chain. The park 
                contains some of the highest mountains in eastern North America, including Clingmans Dome, Mount Guyot, and Mount Le Conte.
            </p>
        </span>

        <hr>

        <span>
            <h1>Hours</h1>
            <br>
            <img id="open-closed-image" src="">            
            <p>Great Smokey Mountains National Park is open 24 hours a day with primary roads never being closed off 
                to the public
            </p>
            <h2>Visiting Center Hours</h2>
            <ul id="opening-hours">
                <li>Sunday: 9AM - 5PM</li>
                <li>Monday: 9AM - 5PM</li>
                <li>Tuesday: 9AM - 5PM</li>
                <li>Wednesday: 9AM - 5PM</li>
                <li>Thursday: 9AM - 5PM</li>
                <li>Friday: 9AM - 5PM</li>
                <li>Saturday: 9AM - 5PM</li>
            </ul>
        </span>

        <?php include ("../../assets/inc/openClosed.php");?>


        <hr>

        <span>
            <h1>Pricing</h1>
            <p>Smokey Mountains National Park has no admission fee and is free to the general public</p>
            <img src="../../assets/images/smokey_mountains2.jpg">
        </span>

<?php
include ("../../assets/inc/footer.php");
?>