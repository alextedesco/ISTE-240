<!-- Alex Tedesco -->
<!-- ISTE-240 -->
<!-- Individual Project 2 -->

<?php
    $title = "Homepage";
    $cssPath = "assets/css/styles.css";
    $jsPath = "assets/js/script.js";
    $faviconPath = "assets/images/gatlinburg-logo.png";
    include ("assets/inc/header.php");
    include ("assets/inc/nav.php");
?>
        <span class="intro">
            <h1>Gatlinburg, Tennessee</h1>
            <p>Gatlinburg, a mountain town in eastern Tennessee, is known as a gateway to the roughly 520,000-acre Great
                Smoky Mountains National Park. Many of its key attractions offer sweeping views of the neighboring park,
                including the 407-ft. Space Needle observation tower and the Sky Lift, a 2.1-mile aerial cable car that
                journeys from Downtown to the popular amusement park and ski resort Ober Gatlinburg.
            </p>
            <img src="assets/images/cover.jpg">
        </span>

        <h1 class="visit">Please tell us about visit:</h1>
        <hr>

        <!-- Google Maps Embed of Gatlinburg, Tennessee -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51823.33220574371!2d-83.53303579742828!3d35.72724497687266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x885953eacb08a589%3A0x4ab1d7ae7eb779a8!2sGatlinburg%2C%20TN%2037738!5e0!3m2!1sen!2sus!4v1676220304512!5m2!1sen!2sus"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>

        <!-- Form containing each input question in its own block -->
        <form name="contact-form" method="get" action="#">
            <input type="number" name="howmany" value="0" class="form">How many in your group?<br>
            <input type="date" name="when" class="form">When did you visit?<br>

            <!-- Fieldset with legend for Favorite Place and radio buttons -->
            <fieldset>
                <legend>Favorite Place</legend>
                <input type="radio" name="places" value="nationalPark">Great Smokey Mountains National Park
                <br>
                <input type="radio" name="places" value="dollywood">Dollywood
                <br>
                <input type="radio" name="places" value="museum">Titanic Museum
                <br>
                <input type="radio" name="places" value="civilwar">Buttonwillow Civil War Theater
                <br>
                <input type="radio" name="places" value="cooters">Cooter's Place
                <br>
            </fieldset>

            <br>

            <!-- Slider input for rating recent trip to Gatlinburg -->
            <div class="slider-menu">
                <h2>Rate your trip to Gatlinburg, TN:</h2>
                <!-- Slider that stores the current output value without the need
                of a JavaScript <script> tag -->
                <input class="slider" name="slider" type="range" value="5" min="0" max="10"
                    oninput="this.nextElementSibling.value = this.value">
                <output>5</output>
            </div>

            <br>
            <input type="submit" class="submit">
        </form>

<?php
include ("assets/inc/footer.php");
?>