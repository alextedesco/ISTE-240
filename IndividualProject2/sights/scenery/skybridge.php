<!-- Alex Tedesco -->
<!-- ISTE-240 -->
<!-- Individual Project 2 -->

<?php
    $title = "Skybridge";
    $cssPath = "../../assets/css/styles.css";
    $faviconPath = "../../assets/images/gatlinburg-logo.png";
    include ("../../assets/inc/header.php");
    include ("../../assets/inc/nav.php");
?>

        <span>
            <h1>SkyBridge</h1>
            <img src="../../assets/images/skybridge.jpeg">

            <p>
                The Gatlinburg SkyBridge is the longest pedestrian cable bridge in North America, and 
                it is located at the Gatlinburg SkyLift Park. The SkyBridge has been featured on numerous 
                national news outlets such as CNN, NBC World News Tonight, CBS Evening News, ABC World News, 
                Fox News, Yahoo, People.com, Travel Channel, Discovery Channel, Southern Living, and more!
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
                <li>Friday: 9AM - 10PM</li>
                <li>Saturday: 9AM - 10PM</li>
            </ul>
        </span>

        <?php include ("../../assets/inc/openClosed.php");?>

        <hr>

        <span>
            <h1>Pricing</h1>
            <h2>Single Use</h2>
            <ul>
                <li>Adult (12-64) - $32.95</li>
                <li>Senior (65+) - $25.95</li>
                <li>Junior (4-11) - $18.95</li>
                <li>Child (3 & Below ) - FREE</li>
            </ul>

            <h2>Unlimited Use</h2>
            <ul>
                <li>Adult (12-64) - $34.95</li>
                <li>Senior (65+) - $27.95</li>
                <li>Junior (4-11) - $20.95</li>
                <li>Child (3 & Below ) - FREE</li>
            </ul>
            <img src="../../assets/images/skybridge2.jpeg">
        </span>

    </div>

</body>

</html>