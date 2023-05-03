<!-- Alex Tedesco -->
<!-- ISTE-240 -->
<!-- Individual Project 2 -->

<?php
    $title = "Titanic Museum";
    $cssPath = "../../assets/css/styles.css";
    $jsPath = "../../assets/js/script.js";
    $faviconPath = "../../assets/images/gatlinburg-logo.png";
    include ("../../assets/inc/header.php");
    include ("../../assets/inc/nav.php");
?>

        <span>
            <h1>Titanic Mueseum</h1>
            <img src="../../assets/images/titanic.jpg">

            <p>
                The Titanic Museum is a two-story museum shaped like the RMS Titanic.
                It is located in Pigeon Forge, Tennessee and opened on April 8, 2010.
                It is built half-scale to the original ship
            </p>
        </span>

        <hr>

        <span>
            <h1>Hours</h1>
            <br>
            <img id="open-closed-image" src="">
            
            <ul id="opening-hours">
                <li>Sunday: 9AM - 8PM</li>
                <li>Monday: 9AM - 5PM</li>
                <li>Tuesday: 9AM - 5PM</li>
                <li>Wednesday: 9AM - 5PM</li>
                <li>Thursday: 9AM - 5PM</li>
                <li>Friday: 9AM - 7PM</li>
                <li>Saturday: 9AM - 8PM</li>
            </ul>
        </span>

        <?php include ("../../assets/inc/openClosed.php");?>

        <hr>

        <span class="interior">
            <h1>Interior</h1>
            <a href="../../assets/images/titanic2.webp"><img class="menu" src="../../assets/images/titanic2.webp"></a>
        </span>
<?php
include ("../../assets/inc/footer.php");
?>