<!-- Alex Tedesco -->
<!-- ISTE-240 -->
<!-- Individual Project 2 -->

<?php
    $title = "Buttonwillow Civil War Theater";
    $cssPath = "../../assets/css/styles.css";
    $faviconPath = "../../assets/images/gatlinburg-logo.png";
    include ("../../assets/inc/header.php");
    include ("../../assets/inc/nav.php");
?>

        <span>
            <h1>Buttonwillow Civil War Theater</h1>
            <img src="../../assets/images/buttonwillow_civilwar.jpg">

            <p>
                Built in 2019, the Buttonwillow Civil War Theater offers a unique and fun experience of 
                the American Civil War with reenactments and high quality memorabilia.
            </p>
        </span>

        <hr>

        <span>
            <h1>Hours</h1>
            <br>
            <img id="open-closed-image" src="">  
            <ul id="opening-hours">
                <li>Sunday: 12AM - 7PM</li>
                <li>Monday: 9AM - 5PM</li>
                <li>Tuesday: 9AM - 9PM</li>
                <li>Wednesday: 9AM - 5PM</li>
                <li>Thursday: 9AM - 9PM</li>
                <li>Friday: 9AM - 5PM</li>
                <li>Saturday: Closed</li>
            </ul>
        </span>

        <?php include ("../../assets/inc/openClosed.php");?>

        <hr>

        <span>
            <h1>Pricing</h1>
            <ul>
                <li>Ages 12+ - $29.95</li>
                <li>Ages 5-11 - $19.95</li>
                <li>Ages 4 & Below - FREE</li>
            </ul>
        </span>

    </div>

</body>

</html>