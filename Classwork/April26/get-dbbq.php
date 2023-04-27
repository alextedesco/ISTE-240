<?php

    $url = "https://api.yelp.com/v3/businesses/dinosaur-bar-b-que-rochester/reviews";

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "authorization: Bearer " . "AzkS2OucRfEEmUkBnZeQ8f7vzao-K3D1yjGtMXCfNQtBqwy94fB0FazFnrU-Upd0y5wtvvCbeCYRvNuc2iL3c2FS-OV-JH5AyILQGh-0pPIYHvkj7Cv_5la5LvqGYHYx",
    "cache-control: no-cache",
    ) );

    $results = curl_exec($ch);

    $results = json_decode ($results);

    // var_dump($results);

    // echo $results;

    $reviews = $results->reviews;

    // echo count($reviews)

    foreach ($reviews as $review) {
        echo $review->rating . "<br/>";
        echo $review->text . "<br/>";
        echo "<hr>";

    }

