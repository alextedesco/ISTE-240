<!-- Alex Tedesco -->
<!-- EX09 - PHP MySQL -->

<?php
// Confirms that the database can be connected to successfully
include ("../../dbcon.php");

// Checks if the inputs aren't empty before submission
if (!empty( $_GET['from'] )  && !empty( $_GET['msg'] )) {
	$from = $_GET['from'];
	$msg = $_GET['msg'];
    $date = date("Y-m-d H:i:s");

	$stmt = $conn->prepare("INSERT INTO `comments` (`from`, `message`, `date`) VALUES (?, ?, ?);");
    
	$stmt->bind_param("sss", $from, $msg, $date);
	$stmt->execute();
	$stmt->close();
}

$sql = "SELECT * FROM `comments` ORDER BY `id` LIMIT 50";

$result = $conn->query($sql);

// Saves the data from the table into an iterable list
while ($row = $result->fetch_assoc() ) {
	$records[] = $row;
}

$sql = "SELECT * FROM `comments` ORDER BY `id` LIMIT 50";

$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX09</title>
</head>
<body>
    <h1>Comments</h1>
    <ul>
    <?php
		// Outputs the current records in the comments MySQL table
		foreach ($records as $record) {
			echo "<li>" . $record['from'] . " - " . $record['message'] . " - " . $record['date'] . "</li>";
		}
	?>
    </ul>

    <hr/>
    <!-- Comments form -->
    <h3>Leave a comment</h3>
    <form action="index.php" method="get">		
			From: <input type="text" id="from" name="from" />
			Message: <input type="text" id="msg" name="msg"/>
			<input type="hidden" name="task" value="submitname"/>
			<input type="submit" value="Submit Comment"/>
		</form>
    
</body>
</html>