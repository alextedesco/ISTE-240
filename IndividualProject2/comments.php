<!-- Alex Tedesco -->
<!-- ISTE-240 -->
<!-- Individual Project 2 -->

<?php
// Confirms that the database can be connected to successfully
include ("dbcon.php");

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

<?php
    $title = "Comments";
    $cssPath = "assets/css/styles.css";
    $faviconPath = "assets/images/gatlinburg-logo.png";
    include ("assets/inc/header.php");
    include ("assets/inc/nav.php");
?>

        <span>
                <!-- Comments form -->
                <h1>Leave a comment</h1>
                <form action="index.php" method="get">		
			    From: <input type="text" id="from" name="from" />
		    	Message: <input type="text" id="msg" name="msg"/>
			    <input type="hidden" name="task" value="submitname"/>
			    <input type="submit" value="Submit Comment"/>
		      </form>

              <hr>

              <h1>Comments</h1>
             <ul>
             <?php
	        	// Outputs the current records in the comments MySQL table
	        	foreach ($records as $record) {
	    		echo "<li>" . $record['from'] . " - " . $record['message'] . " - " . $record['date'] . "</li>";
	        	}
	        ?>
    </div>

</body>

</html>