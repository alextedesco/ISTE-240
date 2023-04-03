<?php
/**
 * Connect to the database.
 */

include ('../dbcon.php');

$sql = "SELECT * FROM `240Insert` ORDER BY `id` LIMIT 50";

$result = $conn->query($sql);

// $names = new Array 
while ($row = $result->fetch_assoc() ) {
	// echo $row['first'] . " " . echo $row['last'];
	$records[] = $row;
}

//  Insert


 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>240 DB Insert</title>
	</head>
	<body>
		<h3>The List</h3>
		<div id="list">
			<ul>
			<?php
				//will use for output
				foreach ($records as $record) {
					echo "<li>" . $record['first'] . " " . $record['last'] . "</li>";
				}
			?>
			</ul>
		</div>
		<hr/>
		<h3>Add to the list</h3>
		<form action="preparedStatement.php" method="get">		
			First name: <input type="text" id="first" name="fName" />
			Last name: <input type="text" id="last" name="lName"/>
			<input type="submit" value="Add to the List"/>
		</form>
	</body>
</html>