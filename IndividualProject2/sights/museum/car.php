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
    <title>Hollywood Star Car Museum</title>
</head>

<body>
    <!-- Container for nav, iframe, and form -->
    <div class="container">
        <?php
          include ("../../inc/nav.php");
        ?>

        <span>
            <h1>Hollywood Star Car Museum</h1>
            <img src="../../assets/starcarmuseum.webp">

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
            <img src="../../assets/open.gif">
            
            <ul class="hours">
                <li>Sunday: 9AM - 9PM</li>
                <li>Monday: 9AM - 9PM</li>
                <li>Tuesday: 9AM - 9PM</li>
                <li>Wednesday: 9AM - 9PM</li>
                <li>Thursday: 9AM - 9PM</li>
                <li>Friday: 9AM - 9PM</li>
                <li>Saturday: 9AM - 9PM</li>
            </ul>
        </span>

        <hr>

        <span class="interior">
            <h1>Interior</h1>
            <a href="../../assets/starcars1.jpg"><img class="menu" src="../../assets/starcars1.jpg"></a>
            <a href="../../assets/starcars2.jpg"><img class="menu" src="../../assets/starcars2.jpg"></a>
        </span>

    </div>

</body>

</html>