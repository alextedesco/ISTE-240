<!-- Alex Tedesco -->
<!-- ISTE-240 -->
<!-- Individual Project 2 -->

<?php
    $title = "Hollywood Star Car Museum";
    $cssPath = "../../assets/css/styles.css";
    $faviconPath = "../../assets/images/gatlinburg-logo.png";
    include ("../../assets/inc/header.php");
    include ("../../assets/inc/nav.php");
?>

        <span>
            <h1>Hollywood Star Car Museum</h1>
            <img src="../../assets/images/starcarmuseum.webp">

            <p>
                The Hollywood Star Car Museum features the best Hollywood movie & TV cars in recreated settings 
                displayed with sound, lights, and action! Many of the cars are the creations of George Barris, 
                who has created more famous Hollywood movie & TV cars than anyone.
            </p>
        </span>

        <hr>

        <span>
            <h1>Hours</h1>
            <br>
            <img id="open-closed-image" src="">
            
            <ul id="opening-hours">
                <li>Sunday: 9AM - 9PM</li>
                <li>Monday: 9AM - 9PM</li>
                <li>Tuesday: 9AM - 9PM</li>
                <li>Wednesday: 9AM - 9PM</li>
                <li>Thursday: 9AM - 9PM</li>
                <li>Friday: 9AM - 9PM</li>
                <li>Saturday: 9AM - 9PM</li>
            </ul>
        </span>

        <?php include ("../../assets/inc/openClosed.php");?>

        <hr>

        <span class="interior">
            <h1>Interior</h1>
            <a href="../../assets/images/starcars1.jpg"><img class="menu" src="../../assets/images/starcars1.jpg"></a>
            <a href="../../assets/images/starcars2.jpg"><img class="menu" src="../../assets/images/starcars2.jpg"></a>
        </span>

    </div>

</body>

</html>