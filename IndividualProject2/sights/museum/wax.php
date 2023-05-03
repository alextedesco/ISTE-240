<!-- Alex Tedesco -->
<!-- ISTE-240 -->
<!-- Individual Project 2 -->

<?php
    $title = "Hollywood Wax Museum";
    $cssPath = "../../assets/css/styles.css";
    $faviconPath = "../../assets/images/gatlinburg-logo.png";
    include ("../../assets/inc/header.php");
    include ("../../assets/inc/nav.php");
?>

        <span>
            <h1>Hollywood Wax Museum</h1>
            <br>
            <img src="../../assets/images/waxmuseum.jpg">

            <p>
                The world famous Hollywood Wax Museum is the most visited attraction on Hollywood Boulevard since 1965. 
                Each Hollywood scene gives you the chance to be star among the stars. Take selfies, dance with divas, mingle at an A-list cocktail party, 
                pump iron with Hollywood heavyweights, and so much more. There’s seriously no denying the lifelike presence you’ll feel 
                when you walk straight up to every expertly-crafted wax figure. 
            </p>
        </span>

        <hr>

        <span>
            <h1>Hours</h1>
            <img id="open-closed-image" src="">
            
            <ul id="opening-hours">
                <li>Sunday: 9AM - 12AM</li>
                <li>Monday: 9AM - 12AM</li>
                <li>Tuesday: 9AM - 12AM</li>
                <li>Wednesday: 9AM - 12AM</li>
                <li>Thursday: 9AM - 12AM</li>
                <li>Friday: 9AM - 12AM</li>
                <li>Saturday: 9AM - 12AM</li>
            </ul>
        </span>

        <?php include ("../../assets/inc/openClosed.php");?>

        <hr>

        <span class="interior">
            <h1>Interior</h1>
            <a href="../../assets/images/waxmuseum_interior.jpg"><img class="menu" src="../../assets/images/waxmuseum_interior.jpg"></a>
            <a href="../../assets/images/waxmuseum_interior2.jpg"><img class="menu" src="../../assets/images/waxmuseum_interior2.jpg"></a>
        </span>

    </div>

</body>

</html>