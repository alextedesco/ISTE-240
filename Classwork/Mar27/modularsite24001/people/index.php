<?php

    $title = "People";
    $path = "../";

    include($path.'assets/inc/header.php');

    include($path.'assets/inc/nav.php');

    include($path.'../dbcon.php');

    $sql = "SELECT * FROM '240modular_content' WHERE 'name' = '" . $title . " LIMIT 1";
    
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo $row['content'];
    }
?>
				<h1>Home page stuff...</h1> 
				<div>(eventually, each page will be some includes and a db call only!)</div>
<?php
    include('assets/inc/footer.php');
?>