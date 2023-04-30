<!-- Alex Tedesco -->
<!-- ISTE-240 -->
<!-- Individual Project 1 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css">
    <!-- Sets the favicon to the Gatlinburg logo -->
    <link rel="icon" type="image/x-icon" href="../../assets/gatlinburg-logo.png">
    <title>Titanic Museum</title>
</head>

<body>
    <!-- Container for nav, iframe, and form -->
    <div class="container">
        <?php
          include ("../../inc/nav.php");
        ?>

        <span>
            <h1>Titanic Mueseum</h1>
            <img src="../../assets/titanic.jpg">

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
            <img src="../../assets/open.gif">
            
            <ul class="hours">
                <li>Sunday: 9AM - 8PM</li>
                <li>Monday: 9AM - 5PM</li>
                <li>Tuesday: 9AM - 5PM</li>
                <li>Wednesday: 9AM - 5PM</li>
                <li>Thursday: 9AM - 5PM</li>
                <li>Friday: 9AM - 7PM</li>
                <li>Saturday: 9AM - 8PM</li>
            </ul>
        </span>

        <hr>

        <span class="interior">
            <h1>Interior</h1>
            <a href="../../assets/titanic2.webp"><img class="menu" src="../../assets/titanic2.webp"></a>
        </span>

    </div>

</body>

</html>