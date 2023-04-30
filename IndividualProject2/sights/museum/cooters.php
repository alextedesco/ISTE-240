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
    <title>Cooter's Place</title>
</head>

<body>
    <!-- Container for nav, iframe, and form -->
    <div class="container">
        <?php
          include ("../../inc/nav.php");
        ?>

        <span>
            <h1>Cooter's Place</h1>
            <img src="../../assets/cooters.jpg">

            <p>
                Cooter's Place is the museum of the "Dukes of Hazzard" TV show with indoor go-kart & mini-golf, and 
                other memorabilia from the iconic show. The Gatlinburg place is run by actor Ben Jones.
            </p>
        </span>

        <hr>

        <span>
            <h1>Hours</h1>
            <br>
            <img src="../../assets/open.gif">
            
            <ul class="hours">
                <li>Sunday: 9AM - 6PM</li>
                <li>Monday: 9AM - 6PM</li>
                <li>Tuesday: 9AM - 6PM</li>
                <li>Wednesday: 9AM - 6PM</li>
                <li>Thursday: 9AM - 6PM</li>
                <li>Friday: 9AM - 7PM</li>
                <li>Saturday: 9AM - 7PM</li>
            </ul>
        </span>

        <hr>

        <span class="interior">
            <h1>Interior</h1>
            <a href="../../assets/cooters_interior.jfif"><img class="menu" src="../../assets/cooters_interior.jfif"></a>
            <a href="../../assets/cooters_interior.webp"><img class="menu" src="../../assets/cooters_interior.webp"></a>
        </span>

    </div>

</body>

</html>