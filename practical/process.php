<?php

//You just need to display the data you would hypothetically submit here
//you don't need to actually have it insert into the DB!
//make sure to use the sanitize function before printing the user provided data!

function sanitize($string, $len = 50){
    $string = trim($string);
    $string = htmlentities($string);
    $string = substr($string,0,$len);

    return $string;
}

$name = sanitize($_POST['name']);


$rating = sanitize($_POST['rating']);

$comment = sanitize($_POST['comment']);

//print results below:
echo "The Following will be inserted into the database at a later time:<br/>";
echo "Name: " . $name . "<br/>";
echo "Rating: " . $rating . "<br/>";
echo "Comment: " . $comment;
?>