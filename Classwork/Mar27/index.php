<?php
include ("../dbcon.php");

$sql = "SELECT * FROM petshop LIMIT 50";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "Type: " . $row['type'] . "<hr>";
}
?>