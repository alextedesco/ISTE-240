<!-- Alex Tedesco -->
<!-- ISTE-240 -->
<!-- Individual Project 2 -->

<?php
    $title = "Cooter's Place";
    $cssPath = "../../assets/css/styles.css";
    $jsPath = "../../assets/js/script.js";
    $faviconPath = "../../assets/images/gatlinburg-logo.png";
    include ("../../assets/inc/header.php");
    include ("../../assets/inc/nav.php");
?>

        <span>
            <h1>Cooter's Place</h1>
            <img src="../../assets/images/cooters.jpg">

            <p>
                Cooter's Place is the museum of the "Dukes of Hazzard" TV show with indoor go-kart & mini-golf, and 
                other memorabilia from the iconic show. The Gatlinburg place is run by actor Ben Jones.
            </p>
        </span>

        <hr>

        <span>
            <h1>Hours</h1>
            <br>
            <img id="open-closed-image" src="">
            
            <ul id="opening-hours">
                <li>Sunday: 9AM - 6PM</li>
                <li>Monday: 9AM - 6PM</li>
                <li>Tuesday: 9AM - 6PM</li>
                <li>Wednesday: 9AM - 6PM</li>
                <li>Thursday: 9AM - 6PM</li>
                <li>Friday: 9AM - 7PM</li>
                <li>Saturday: 9AM - 7PM</li>
            </ul>
        </span>

        <?php include ("../../assets/inc/openClosed.php");?>

        <hr>

        <span class="interior">
            <h1>Interior</h1>
            <a href="../../assets/images/cooters_interior.jfif"><img class="menu" src="../../assets/images/cooters_interior.jfif"></a>
            <a href="../../assets/images/cooters_interior.webp"><img class="menu" src="../../assets/images/cooters_interior.webp"></a>
        </span>

<?php
include ("../../assets/inc/footer.php");
?>